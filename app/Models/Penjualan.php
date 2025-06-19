<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualans';
    protected $primaryKey = 'Faktur';
    public $incrementing = false;
    protected $fillable = ['Faktur', 'Nopelanggan', 'Tanggalpenjualan'];
    
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'Nopelanggan', 'Nopelanggan');
    }
}
