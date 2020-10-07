<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Order;
use App\Card;
use App\Client;
use App\User;
use Auth;
use Alert;
class OrderController extends Controller
{

    public function index()
    {
        
        $orders = Order::with(['users','products'])->orderBy('OrderDate','DESC')->get();
       

        return view('backoffice.orders.index')->with('orders',$orders);
    }


    public function sendOrder(){
        $user = Auth::user();
        $cards = Card::where('user_id',$user->id)->get();

        $order = Order::create([
            'orderComplet' => false,
        ]);

        $order->users()->attach($user);

        foreach ($cards as $card) {
            $order->products()->attach($card->product_id);
            $card->update(['completed'=>true]);
        }

        Alert::success('votre commande a été soumise avec succès',"nous vous appellerons dans les plus brefs délais");

        return redirect(url('/'));

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Order $order)
    {
        $products = $order->products;
        $user = $order->users->first();  
        $client = Client::where('user_id',$user->id)->first();

        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product->price; 
        }


        return view('backoffice.orders.details')
                        ->with('user',$user)
                        ->with('client',$client)
                        ->with('totalPrice',$totalPrice)
                        ->with('products',$products);
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
