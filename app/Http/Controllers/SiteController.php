<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Product;
use App\Category;
use App\Characteristic;
use App\Card;

class SiteController extends Controller {
    public function index(){

        $categories = Category::orderBy('order','ASC')->limit(6)->get();
        $products = Product::orderBy('created_at','DESC')->paginate(16);
        $latestProducts = Product::orderBy('created_at','DESC')->limit(8)->get();

        $cardItemsCount = 0;

        if(Auth::user()){
            $card = Card::where('user_id',Auth::user()->id)->where('completed',false)->get();
            $cardItemsCount = $card->count();
        }

        return view('index')
                    ->with('categories',$categories)
                    ->with('products',$products)
                    ->with('latestProducts',$latestProducts)
                    ->with('cardItemsCount',$cardItemsCount);
    }

    public function GetProduct(Product $product){
        $categories = Category::orderBy('order','ASC')->limit(6)->get();
        $characteristic = Characteristic::all();
        $pro = Product::with('characteristic')->where('id',$product->id)->first();

        $cardItemsCount = 0;

        if(Auth::user()){
            $card = Card::where('user_id',Auth::user()->id)->where('completed',false)->get();
            $cardItemsCount = $card->count();
        }

        return view('products.singleProduct')
                        ->with('categories',$categories)
                        ->with('product',$product)
                        ->with('characteristic',$characteristic)
                        ->with('cardItemsCount',$cardItemsCount);

    }

    public function GetProductByMark($mark){

        $categories = Category::orderBy('order','ASC')->limit(6)->get();

        $cardItemsCount = 0;

        if(Auth::user()){
            $card = Card::where('user_id',Auth::user()->id)->where('completed',false)->get();
            $cardItemsCount = $card->count();
        }


        $products = Product::whereHas('category',function($query)use($mark){
            $query->where('name',$mark);
        })->paginate(15);

        return view('mark')->with('products',$products)
                            ->with('categories',$categories)
                            ->with('cardItemsCount',$cardItemsCount)
                            ->with('mark',$mark);

    }

    public function searchProduct (Request $request){

        $categories = Category::orderBy('order','ASC')->limit(6)->get();

        $cardItemsCount = 0;

        if(Auth::user()){
            $card = Card::where('user_id',Auth::user()->id)->where('completed',false)->get();
            $cardItemsCount = $card->count();
        }

        $products = Product::where('name','LIKE','%' . $request->product . '%')
                            ->orWhere('description','LIKE','%' . $request->product . '%')
                            ->paginate(15);

        return  $products->count() == 0 ? abort(404) 
                                        : view('mark')->with('products',$products)
                                                    ->with('categories',$categories)
                                                    ->with('cardItemsCount',$cardItemsCount)
                                                    ->with('mark',$request->product);
    }

    public function Contact(){

        $categories = Category::orderBy('order','ASC')->limit(6)->get();

        return view('contact')->with('categories',$categories);
    }
}
