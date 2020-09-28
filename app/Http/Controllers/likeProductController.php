<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class likeProductController extends Controller
{
    public function __invoke($id){
        $product = Product::find($id);
        $likes = $product->like + 1;
        $product->update([
            'like' => $likes,
        ]);
    }
}
