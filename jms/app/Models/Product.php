<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price', 'stock_quantity', 'cat_id', 'image_url'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
