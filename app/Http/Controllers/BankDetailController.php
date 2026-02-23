<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankDetail;

class BankDetailController extends Controller
{
    public function index()
    {
        $banks = BankDetail::latest()->get();
        return view('admin.bank.index', compact('banks'));
    }

    public function create()
    {
        return view('admin.bank.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bank_name' => 'required',
            'account_no' => 'required',
            'ifsc_code' => 'required',
            'branch_name' => 'required',
            'account_type' => 'required',
            'invoice_type' => 'required|in:gst,non-gst',
            'status' => 'required|in:0,1',
        ]);
 
        if ($request->status == 1) {
            BankDetail::where('invoice_type', $request->invoice_type)
                ->update(['status' => 0]);
        }

        BankDetail::create($request->all());
        return redirect()->route('admin.bank.index')->with('success', 'Bank Added Successfully');
    }

    public function edit($id)
    {
        $bank = BankDetail::findOrFail($id);
        return view('admin.bank.edit', compact('bank'));
    }

    public function update(Request $request, $id)
    {
        // 1. Validation Logic
        $request->validate([
            'bank_name'        => 'required|string|max:255',
            'account_no'       => 'required|numeric',
            'ifsc_code'        => 'required|string|size:11', 
            'branch_name'      => 'required|string',
            'account_type'     => 'required',
            'invoice_type'     => 'required',
            'stamp_duty'       => 'required|numeric',
            'status'           => 'required|boolean',
            'account_scenario' => 'required|string',
        ]);
 
        if ($request->status == 1) {
            BankDetail::where('invoice_type', $request->invoice_type)
                ->where('id', '!=', $id)
                ->update(['status' => 0]);
        }

        // 3. Update Data
        $bank = BankDetail::findOrFail($id);
        $bank->update($request->all());

        return redirect()->route('admin.bank.index')->with('success', 'Bank details updated successfully!');
    }

    public function destroy($id)
    {
        $bank = BankDetail::findOrFail($id);
        $bank->delete();
        return back()->with('success', 'Bank Deleted');
    }
    public function updateStatus(Request $request)
    {
        // Agar status active (1) kiya ja raha hai, toh pehle us group ko reset karo
        if ($request->status == 1) {
            BankDetail::where('invoice_type', $request->invoice_type)->update(['status' => 0]);
        }

        // Ab current bank ko update karo
        $bank = BankDetail::findOrFail($request->id);
        $bank->status = $request->status;
        $bank->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully for ' . strtoupper($request->invoice_type)
        ]);
    }

    // BankController.php ya InvoiceController.php mein
    public function getActiveBank(Request $request)
    {
        $bank = BankDetail::where('invoice_type', $request->type)
            ->where('status', 1) // Sirf Active bank
            ->first();

        if ($bank) {
            return response()->json([
                'success' => true,
                'bank' => $bank
            ]);
        }

        return response()->json(['success' => false, 'message' => 'No active bank found']);
    }
    
    
}
