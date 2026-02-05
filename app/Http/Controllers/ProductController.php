<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //add to cart method


    // product details
    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.detail', compact('product'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('category', compact('category'));
    }


}
