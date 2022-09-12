<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari_id',
        'hari_en',
        'hari_vl',
        'hari_jam_start',
        'hari_jam_end',

    ];
    public function doctor()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
