<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\Image;

class Product extends Model
{
    protected $guarded = [];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function category(){
        return $this->hasOne(Category::class);
    }

}
