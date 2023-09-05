<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'npm',
        'password',
        'photo',
        'role',
        'jabatan',
        'departemen',
        'bidang',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles()
    {
        return $this->hasOne(Role::class,'id','role');
    }

    public function absen()
    {
        return $this->hasMany(Absen::class, 'users_id');
    }

    public function user()
    {
        return $this->hasMany(Penilaian::class, 'users_id');
    }

    public function receiver()
    {
        return $this->hasMany(Penilaian::class, 'receiver_id');;
    }


}
