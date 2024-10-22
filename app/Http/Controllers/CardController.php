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
        $categories = Category::orderBy('order','ASC')->limit(6)->get();
        $user = Auth::user();

        $cardItems = Card::with('product')->where('user_id',$user->id)->where('completed',false)->get();
        $product = New Product();
        $totalCartPrice = 0;
        foreach ($cardItems as $item) {
            $totalCartPrice += $item->product->price; 
        }
        $cardItemsCount = 0;

        if(Auth::user()){
            $card = Card::where('user_id',Auth::user()->id)->where('completed',false)->get();
            $cardItemsCount = $card->count();
        }

        return view('card')
                    ->with('categories',$categories)
                    ->with('items',$cardItems)
                    ->with('product',$product)
                    ->with('cardItemsCount',$cardItemsCount)
                    ->with('totalPrice',$totalCartPrice);

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

    public function CountItem(){
        $cardItemsCount = 0;

        if(Auth::user()){
            $card = Card::where('user_id',Auth::user()->id)->where('completed',false)->get();
            $cardItemsCount = $card->count();
        }

        return response()->json([
            'cardItemsCount' => $cardItemsCount,
        ]);

    }

    public function destroy(Card $card){
        $card->delete();
        return redirect(route('card.index'));
    }    

}
