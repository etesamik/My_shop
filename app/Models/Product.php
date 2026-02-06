<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'category_id',
        'brand_id', 'price', 'slug', 'description',
        'delivery_cost', 'discounted_price', 'status'];

    public function attributes()
    {
        return $this->belongsToMany(
            Attribute::class,
            'product_attribute'
        )->withPivot('value');
        // میگه ستون اضافه value هم بیاد
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
