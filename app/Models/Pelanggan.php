<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $primaryKey = 'Nopelanggan';
    public $incrementing = false;
    protected $fillable = ['Nopelanggan', 'Namapelanggan', 'Alamat'];
    
    public function penjualans()
    {
        return $this->hasMany(Penjualan::class, 'Nopelanggan', 'Nopelanggan');
    }
}
