<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gold_transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_type',
        'gold_weight_tola',
        'gold_weight_ounce',
        'price_per_tola',
        'price_per_ounce',
        'total_amount',
    ];
}
