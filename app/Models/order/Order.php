<?php

namespace App\Models\order;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id',
        'address_id',
        'coupon_id',
        'status',
        'total_amount',
        'delivery_amount',
        'payment_type',
        'coupon_amount',
        'paying_amount',
        'description',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

