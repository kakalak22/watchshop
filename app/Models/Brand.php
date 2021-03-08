<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = "brand";
    public function product(){
        return $this->hasMany('App\Models\Product','brand_id','id');
    }

    public function brand(){
        return $this->belongsTo('App\Models\Categories','cate_id','id');
    }
}
