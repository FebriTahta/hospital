<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'dokter_id','alumni_pendidikan','tahun_pendidikan_end','jenjang_pendidikan','tahun_pendidikan_start'
    ];
}
