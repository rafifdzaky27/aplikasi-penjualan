<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'Kodebarang';
    public $incrementing = false;
    protected $fillable = ['Kodebarang', 'Namabarang', 'Hargabarang'];
}
