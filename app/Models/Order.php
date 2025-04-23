<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'tb_orders';

    protected $fillable = [
        'user_id', 'total_harga', 'jumlah_bayar', 'kembalian', 'struk'
    ];

    public function user()
    {
        return $this->belongsTo(UserCafe::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'order_id');
    }
}
