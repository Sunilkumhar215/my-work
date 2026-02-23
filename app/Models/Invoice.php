<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoices";

    protected $fillable = [
        'invoice_no',
        'invoice_type',
        'invoice_date',
        'due_date',
        'client_name',
        'client_phone',
        'client_email',
        'client_address',
        'client_gstin',
        'client_pan',
        'client_state',
        'client_state_code',
        'place_of_supply',
        'reverse_charge',
        'subtotal',
        'total_discount',
        'total_taxable_value',
        'total_cgst',
        'total_sgst',
        'total_igst',
        'total_gst_amount',
        'grand_total',
        'net_payable',
        'paid_amount',
        'status'
    ];

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }

}
