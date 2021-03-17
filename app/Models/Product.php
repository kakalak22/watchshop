<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "product";
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Models\Categories', 'category_id', 'id');
    }

    public function order_items()
    {
        return $this->hasMany('App\Models\Product', 'product_id', 'id');
    }

<<<<<<< HEAD
    public function product_image(){
        return $this->hasMany('App\Models\ProductImage','product_id','id');
=======
    public function product_image()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id', 'id');
>>>>>>> 77ae9c9f08bf8aeed27e1f3d0d936d81ad24622e
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }
}
