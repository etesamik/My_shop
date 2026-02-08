<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'title',
        'phone',
        'address',
        'postal_code',
        'city',
        'province',
        'province_id',
        'city-id'
    ];
}
