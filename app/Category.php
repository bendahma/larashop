<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\Image;

class Category extends Model
{
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function image(){
        return $this->hasOne(Image::class);
    }

}
