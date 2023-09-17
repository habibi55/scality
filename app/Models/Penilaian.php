<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'users_id',
        'receiver_id',
        'receiver_name',
        'bulan_penilaian',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'keterangan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');                    
    }

}
