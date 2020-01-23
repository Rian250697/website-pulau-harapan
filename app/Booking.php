<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama', 'email', 'no_handphone', 'jumlah_orang', 'tgl_pemesanan', 'paket_wisata', 'status',
    ];
}
