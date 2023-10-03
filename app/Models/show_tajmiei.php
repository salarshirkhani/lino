<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class show_tajmiei extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_shamsi',
        'last_shamsi',
        'duration',
        '15daysChangePrice',
        '30daysChangePrice',
        '45daysChangePrice',
        '60daysChangePrice',
        'AllTimeChangePrice',
        '15daysChangeMarket',
        '30daysChangeMarket',
        '45daysChangeMarket',
        '60daysChangeMarket',
        'AllTimeChangeMarket',
        '15daysChangePrice_After',
        '30daysChangePrice_After',
        '45daysChangePrice_After',
        '60daysChangePrice_After',
        'AllChangePrice_After',
        '15daysChangeMarket_After',
        '30daysChangeMarket_After',
        '60daysChangeMarket_After',
        'AllChangeMarket_After',
        'stock_name',
        'code',
    ];
}
