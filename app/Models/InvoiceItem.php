<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $table = "invoice_items";
    protected $fillable = [
        'invoice_id',
        'description',
        'hsn_sac_code',
        'unit',
        'quantity',
        'unit_price',
        'discount_per_item',
        'taxable_value',
        'gst_rate',
        'gst_amount',
        'sgst_amount',
        'igst_amount',
        'total_item_amount',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
