<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'Nama Supplier',
        'Kontak Supplier',
        'Alamat'
    ];

    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}
