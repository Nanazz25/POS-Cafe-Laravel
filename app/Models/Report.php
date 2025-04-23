<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'tb_reports';

    protected $fillable = ['tanggal', 'total_transaksi', 'total_penjualan', 'total_keuntungan'];
}
