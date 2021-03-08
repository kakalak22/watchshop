<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = "categories";

    public function product(){
        return $this->hasMany('App\Models\Product','category_id','id');
    }
    public function brand(){
        return $this->hasMany('App\Models\Brand','brand_id','id');
    }
}
