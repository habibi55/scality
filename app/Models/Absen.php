<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

        protected $fillable = [
        'image',
        'users_id',
        // 'jadwal_absen_id',
        'judul'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    // public function jadwal()
    // {
    //     return $this->belongsTo('App\Models\JadwalAbsen', 'jadwal_absen_id', 'id');
    // }
}
