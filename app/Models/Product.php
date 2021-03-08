<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";

    public function category(){
        return $this->belongsTo('App\Models\Categories','category_id','id');
    }

    public function order_items(){
        return $this->hasMany('App\Models\Product','product_id','id');
    }

    public function product_image(){
        return $this->belongsTo('App\Models\ProductImage','image_id','id');
    }

    public function brand(){
        return $this->belongsTo('App\Models\Brand','brand_id','id');
    }
}
