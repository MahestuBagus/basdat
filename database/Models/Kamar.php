<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transaksi()
    {
        return $this->hasManyThrough(Transaksi::class, DetailTransaksi::class);
    }

    public function jenis()
    {
        return $this->belongsTo(JenisKamar::class);
    }

    public function pesan()
    {
        return $this->hasOne(Pesan::class);
    }
}
