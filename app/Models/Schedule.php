<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "Schedule_demo";
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'project', 
        'demo_date', 
        'demo_time', 
        'description'
    ];
}