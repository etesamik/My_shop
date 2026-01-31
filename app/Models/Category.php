<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // اینو نمیدونم یعنی چی! بپرسم.................
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }


}
