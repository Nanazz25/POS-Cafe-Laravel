<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'tb_transactions';

    protected $fillable = [
        'order_id', 'metode_pembayaran', 'status_pembayaran', 'total_bayar', 'kembalian'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
