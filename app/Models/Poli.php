<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_poli',
        'slug_poli',
        'thumbnail',
        'online_registrasi',
        'img_poli'
    ];

    public function hari()
    {
        return $this->belongsToMany(Hari::class);
    }
}
