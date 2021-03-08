<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    use HasFactory;
    protected $table = "order_items";

    public function orders(){
        return $this->belongsTo('App\Models\Orders','order_id','id');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
