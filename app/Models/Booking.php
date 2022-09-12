<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id','pasien_id','cabang_id','spesialis_id','tanggal_booking','status'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }
    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class);
    }

    
}
