<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];

    // connect to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // connect to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
