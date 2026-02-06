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
        $product = Product::with('attributes')
            ->where('slug', $slug)
            ->firstOrFail();
        // ما توی مدل یه فانکشن نوشتیم به نام attributesکه میاد ولیو ها و اتریبیوت ها رو از جدول میگیره. اینحا میایم از همون استفاده می‌کنیم. وو دوباره نمی‌خواد خودمون کویری بزنیم. توی مدل این ها رو انجام میدیم.

        return view('frontend.product.product', compact('product'));
    }
// نکته: وقتی توی مدل یه فانکشن مثل attributes میسازیم و مینویسیم دیگه برای هر ابجکت از productهم میتونیم ازش استفاده کنیم. نمونه توی front
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('category', compact('category'));
    }


}
