<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik_pasien','nama_pasien','telp_pasien','tanggal_lahir_pasien'
    ];

    public function booking()
    {
        $this->hasMany(Booking::class);
    }
}
