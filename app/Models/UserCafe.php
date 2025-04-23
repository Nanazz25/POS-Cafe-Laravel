<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserCafe extends Authenticatable
{
    protected $table = 'tb_users_cafe';

    protected $fillable = [
        'username', 'password', 'nama', 'role', 'alamat', 'telepon'
    ];

    protected $hidden = ['password'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
}
