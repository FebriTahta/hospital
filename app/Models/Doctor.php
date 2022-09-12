<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'cabang_id',
        'spesialis_id',
        'nama_dokter',
        'deskripsi_dokter',
        'tempat_lahir_dokter',
        'tanggal_lahir_dokter',
        'telp_dokter',
        'img_dokter',
        'gender_dokter',
        'slug_dokter'
    ];

    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }

    public function jadwal()
    {
        return $this->belongsToMany(Jadwal::class);
    }

    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
