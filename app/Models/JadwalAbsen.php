<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalAbsen extends Model
{
    use HasFactory;

        protected $fillable = [
        'judul',
        'tempat',
        'waktu'
    ];

    // public function judul()
    // {
    //     return $this->hasMany(Absen::class, 'jadwal_absen_id');
    // }
}
