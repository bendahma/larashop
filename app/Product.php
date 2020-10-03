<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\Image;
use App\Characteristic;
use App\Color;
use App\Card;
use App\Order;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function mainImageUrl($id){
        $image = Image::where('product_id',$id)->where('productMainImage',true)->first();
        return $image->url;
    }

    public function characteristic(){
        return $this->hasOne(Characteristic::class);
    }

    public function colors(){
        return $this->belongsToMany(Color::class,'color_product');
    }

    public function card(){
        return $this->hasMany(Card::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

}
