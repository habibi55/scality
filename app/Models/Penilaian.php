<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'users_id',
        'a',
        'b'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }
}
