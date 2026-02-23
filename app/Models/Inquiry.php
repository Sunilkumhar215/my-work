<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    // Table ka naam (optional agar plural hai)
    protected $table = 'inquiries';

    // Kaunse fields backend se fill ho sakte hain
    protected $fillable = [
        'name',
        'country_code',
        'phone',
        'email',
        'budget',
        'file_path',
        'message',
        'is_read',
    ];
}