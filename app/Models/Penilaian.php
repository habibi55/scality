<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        // P1 = Penilaian 1
        
        'users_id',
        'receiver_id',
        'p1',
        'p2'
    ];

    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'users_id', 'receiver_id', 'id');
    // }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id')
                    ->where('receiver_id', $this->id);
    }
}
