<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'paymentmethod',
        'card_name',
        'exp_date',
        'card_no',
        'cvv_no',
        'user_id',
        'product_id',
        'product_image',
        'product_name',
        'product_price',
        'total_price',
        'product_quantity',
        'order_status',
        'order_date',
        'order_time',
        'order_number',
    ];

 
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('product_name', 'product_image', 'product_price', 'product_quantity');
    }

    // user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // product relationship
}