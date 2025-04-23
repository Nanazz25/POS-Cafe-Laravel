<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'tb_order_items';

    protected $fillable = ['order_id', 'menu_id', 'jumlah', 'subtotal'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
