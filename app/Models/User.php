<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\post;
use app\Models\Pesanan;
use App\Models\doctor_schedule;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'phone',
        'alamat',
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
    ];

    // public function konsultasis()
    // {
    //     return $this->belongsToMany('App\Models\konsultasi');
    // }

    // public function members()
    // {
    //     return $this->hasMany(Member::class, 'user_id', 'id');
    // }

    public function post()
    {
        return $this->hasMany(post::class);
    }

    public function konsultasi()
    {
        return $this->hasMany(konsultasi::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'user_id', 'id');
    }

    // Di dalam file App\Models\User.php
    public function schedules()
    {
        return $this->hasMany(doctor_schedule::class, 'doctor_id'); // ganti 'doctor_id' dengan nama kolom yang benar pada tabel schedules.
    }
}
