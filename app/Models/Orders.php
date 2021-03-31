<?php

namespace App\Models;

use App\Models\OrdersProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $guarded = [];
    protected $fillable = [
        'status', 'customer_name', 'customer_email', 'customer_address', 'customer_phone', 'customer_city', 'customer_district', 'total'
    ];
    protected $primaryKey = 'id';
    public function orders()
    {
        return $this->hasMany('App\Models\OrderItems', 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function orders_products()
    {
        return $this->hasMany('App\Models\OrdersProduct','order_id');
    }
}