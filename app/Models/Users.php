<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "users";
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany('App\Models\Orders', 'user_id', 'id');
    }

    public function roles()
    {
        return @$this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }
}
