<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\BankDetail;
use App\Models\InvoiceItem;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class InvoicesController extends Controller
{

    public function create()
    {
        $invoiceNo = 'INV-' . now()->format('Ymd') . '-' . rand(1000, 9999);
        $profile = Profile::first();
        if (!$profile) {
            return redirect()->route('admin.profile')->with('error', 'Please complete your business profile first.');
        }
        $company = [
            'company_name'    => $profile->company_name,
            'company_email'     => $profile->company_email,
            'company_phone' => $profile->company_phone,
            'gstin'   => $profile->gstin,
            'address'   => $profile->address,
        ];
        return view('admin.invoices.create', [
            'invoiceNo' => $invoiceNo,
            'company'   => $company
        ]);
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $type = $request->invoice_type;
            $subtotal = $discount = $gst = 0;

            $invoice = Invoice::create([
                'invoice_no'        => $request->invoice_no,
                'invoice_type'      => $type,
                'invoice_date'      => now(),
                'due_date'          => now()->addDays(7),
                'client_name'       => $request->client_name,
                'client_phone'      => $request->client_phone,
                'client_email'      => $request->client_email,
                'client_address'    => $request->client_address,
                'client_gstin'      => $request->client_gstin,
                'client_pan'        => $request->client_pan,
                'client_state'      => $request->client_state,
                'client_state_code' => $request->client_state_code,
                'place_of_supply'   => $request->client_state_code,
                'reverse_charge'    => 'No',
                'subtotal'          => 0,
                'total_discount'    => 0,
                'total_taxable_value' => 0,
                'total_cgst'        => 0,
                'total_sgst'        => 0,
                'total_igst'        => 0,
                'total_gst_amount'  => 0,
                'grand_total'       => 0,
                'net_payable'       => 0,
                'paid_amount'       => $request->paid ?? 0,
            ]);

            foreach ($request->items as $i) {
                if (empty($i['description'])) continue;

                $q = $i['quantity'] ?? 0;
                $p = $i['unit_price'] ?? 0;
                $d = $i['discount'] ?? 0;

                $base    = $q * $p;
                $taxable = $base - $d;
                $rate    = $type == 'gst' ? ($i['gst_rate'] ?? 0) : 0;
                $g       = $taxable * ($rate / 100);

                $subtotal += $base;
                $discount += $d;
                $gst      += $g;

                InvoiceItem::create([
                    'invoice_id'    => $invoice->id,
                    'hsn_sac_code'  => $i['hsn_sac_code'] ?? 'null',
                    'description'   => $i['description'],
                    'quantity'      => $q,
                    'unit_price'    => $p,
                    'discount_per_item'      => $d,
                    'gst_rate'      => $rate,
                    'gst_amount'    => $g,
                    'taxable_value' => $taxable,
                    'total_item_amount'         => $taxable + $g,
                ]);
            }

            $net   = $subtotal - $discount;
            $cgst  = $type == 'gst' ? $gst / 2 : 0;
            $sgst  = $type == 'gst' ? $gst / 2 : 0;
            $grand = $net + $gst;

            $invoice->update([
                'subtotal'            => $subtotal,
                'total_discount'      => $discount,
                'total_taxable_value' => $net,
                'total_cgst'          => $cgst,
                'total_sgst'          => $sgst,
                'total_gst_amount'    => $gst,
                'grand_total'         => $grand,
                'net_payable'         => $grand,
            ]);

            DB::commit();
            return redirect()->route('admin.invoices.index')->with('success', 'Invoice created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Invoice Creation Failed: ' . $e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Something went wrong while creating the invoice. Please try again.');
        }
    }

    public function index()
    {

        $invoices = Invoice::latest()->get();
        return view('admin.invoices.index', compact('invoices'));
    }

    public function stores(Request $request)
    {
        return redirect()->route('admin.invoices.index')
            ->with('success', 'Invoice created successfully!');
    }
    public function show(Invoice $invoice)
    {
        $profile = Profile::first();

        $company = [
            'company_name'    => $profile->company_name,
            'company_email'     => $profile->company_email,
            'company_phone' => $profile->company_phone,
            'gstin'   => $profile->gstin,
            'address'   => $profile->address,
        ];

        $bank = BankDetail::where('invoice_type', $invoice->invoice_type)
            ->where('status', 1)
            ->first();

        return view('admin.invoices.view', compact('invoice', 'bank', 'company'));
    }

    public function getCustomer($phone)
    {
        $invoice = Invoice::where('client_phone', $phone)
            ->latest()
            ->first();
        if ($invoice) {
            return response()->json([
                'name'       => $invoice->client_name,
                'email'      => $invoice->client_email,
                'address'    => $invoice->client_address,
                'gstin'      => $invoice->client_gstin,
                'pan'        => $invoice->client_pan,
                'state'      => $invoice->client_state,
                'state_code' => $invoice->client_state_code,
            ]);
        }
        return response()->json(null);
    }
}
