<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";

    public function category(){
        return $this->belongsTo('App\Categories','category_id','id');
    }

    public function bill_detail(){
        return $this->hasMany('App\BillDetails','id_product','id');
    }
}
