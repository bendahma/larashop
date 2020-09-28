<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Category;
use App\Product;
use App\Card;
class CardController extends Controller
{
    public function index(){
        $categories = Category::orderBy('order','ASC')->get();

        return view('card')
                    ->with('categories',$categories);
    }


    public function addToCart($id){
        $product = Product::find($id);
        $user = Auth::user();

        $c = Card::where('user_id',$user->id)->where('product_id',$product->id)->get();

        foreach ($c as $v) {
            if($v->comcompleted == false){
                $succes = 'error';
                $messag = "Produit délà ajouté au panier";
                return response()->json([
                    'success' => $succes,
                    'message' => $messag,
                ]);
            }
        }

        $card = Card::create([
            'product_id' => $product->id,
            'user_id' => $user->id,
            'completed' => false,
        ]);
        
        $success = 'success';
        $message = "Produit à été ajouté au panier avec success";
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    

}
