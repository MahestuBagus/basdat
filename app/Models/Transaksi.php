<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tamu()
    {
        return $this->belongsTo(Tamu::class);
    }

    // public function pesan()
    // {
    //     return $this->belongsTo(Pesan::class);
    // }
}
