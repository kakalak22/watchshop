<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    use HasFactory;
    protected $table = "bill_details";

    public function bill(){
        return $this->belongsTo('App\Bill','id_bill','id');
    }

    public function product(){
        return $this->belongsTo('App\Product','id_product','id');
    }
}
