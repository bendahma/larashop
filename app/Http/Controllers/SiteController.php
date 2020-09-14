<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class SiteController extends Controller
{
    public function index(){

        $categories = Category::orderBy('order','ASC')->get();
        $products = Product::all();
        $latestProducts = Product::orderBy('created_at','DESC')->limit(8)->get();
        return view('index')
                    ->with('categories',$categories)
                    ->with('products',$products)
                    ->with('latestProducts',$latestProducts);
    }
}
