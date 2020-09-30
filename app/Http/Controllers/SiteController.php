<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Product;
use App\Category;
use App\Characteristic;
use App\Card;

class SiteController extends Controller
{
    public function index(){

        $categories = Category::orderBy('order','ASC')->get();
        $products = Product::orderBy('created_at','DESC')->get();
        $latestProducts = Product::orderBy('created_at','DESC')->limit(8)->get();

        $cardItemsCount = 0;

        if(Auth::user()){
            $card = Card::where('user_id',Auth::user()->id)->get();
            $cardItemsCount = $card->count();
        }

        return view('index')
                    ->with('categories',$categories)
                    ->with('products',$products)
                    ->with('latestProducts',$latestProducts)
                    ->with('cardItemsCount',$cardItemsCount);
    }

    public function GetProduct(Product $product){
        $categories = Category::orderBy('order','ASC')->get();
        $characteristic = Characteristic::all();
        $pro = Product::with('characteristic')->where('id',$product->id)->first();
        return view('products.singleProduct')
                        ->with('categories',$categories)
                        ->with('product',$product)
                        ->with('characteristic',$characteristic);
    }
}
