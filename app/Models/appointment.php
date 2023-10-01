<?php

namespace App\Models;

use App\Models\User;
use App\Models\doctor_schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function schedule()
    {
        return $this->belongsTo(doctor_schedule::class, 'schedule_id');
    }
}
