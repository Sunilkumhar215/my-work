<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "business_profiles";
    protected $fillable = [
        'company_name', 
        'company_email', 
        'company_phone', 
        'gstin', 
        'address'
    ];
}