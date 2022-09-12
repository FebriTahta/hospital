<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
