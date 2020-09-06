<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\Category;

class Image extends Model
{
    protected $guarded = [];

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
