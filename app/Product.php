<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Category;
use App\Image;

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

}
