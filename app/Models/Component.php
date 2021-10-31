<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = [
        'processor',
        'motherboard',
        'ram',
        'casing',
        'storage',
        'powersupply',
    ];
}
