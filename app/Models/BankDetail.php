<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $table = "bank_details";
    
    protected $fillable = [
        "id",
        'bank_name',
        'account_no',
        'ifsc_code',
        'branch_name',
        'account_type',
        'stamp_duty',
        'account_scenario',
        'status',
        'invoice_type',
        
    ];
}

