<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
