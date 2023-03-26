<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category_id',
        'brand_id',
        'product_price',
        'product_old_price',
        'product_quantity',
        'product_description',
        'product_image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories()
{
    return $this->belongsToMany(Category::class);
}

public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('product_name', 'product_image', 'product_price', 'product_quantity');
    }
}