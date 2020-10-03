<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Order extends Model
{
    protected $guarded = [];
    
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
