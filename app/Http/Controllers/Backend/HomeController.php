<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //این برای استفاده از دیتابیسه به جای مدل
use App\models\Category;
use App\models\Product;
use Carbon\Carbon;
use Illuminate\View\View;

class HomeController extends Controller
{
    //home method
    public function index(): View{
        // time
        $now = Carbon::now();

        //week products
        $new_products = Product::where('created_at', '>=', Carbon::now()->subDays(7))
            ->latest()
            ->take(10)
            ->get();


        // اینحا $q یه کوئریه و بعدا تعریف شده که این کوئری میگه که ۴ تا محصول بگیر
        $categories = Category::with(['products' => function($q) {$q->take(4);
        }])->take(8)->get(); // این خط هم میگه از بین همه کتگوری ها فقط ۸ تا بردار

        // تحویل پروداکت ها به شکل ارایه
        $category_products = [];
        foreach($categories as $category){
            $category_products[$category->id] = $category->products;
        }

        $data =[
            'new_products' => $new_products,
            'category_products' => $category_products,
            'categories' => $categories,
        ];

        return view('frontend.home.home', $data);

    }

}

