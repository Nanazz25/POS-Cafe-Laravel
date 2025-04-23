<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'tb_menus';

    protected $fillable = ['nama_menu', 'kategori', 'harga'];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'menu_id');
    }
}
