<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Color extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsToMany(Product::class,'color_product');
    }

}
