<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransaksiMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id_Barang',
        'Id_Supplier',
        'Tanggal',
        'Jumlah',
        'Harga Beli'

    ];
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
