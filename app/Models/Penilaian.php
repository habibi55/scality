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
        'receiver_name',
        'p1',
        'p2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');                    
    }

    // public function receiverName()
    // {
    //     return $this->belongsTo(User::class, 'receiver_name');                    
    // }

}
