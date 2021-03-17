<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = "product_image";
<<<<<<< HEAD
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id','id');
=======
    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
>>>>>>> 77ae9c9f08bf8aeed27e1f3d0d936d81ad24622e
    }
}
