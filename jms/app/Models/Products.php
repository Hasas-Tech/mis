<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'stock_quantity', 'image_url'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_type');
    }
}
