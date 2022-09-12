<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_hari_id',
        'nama_hari_en'
    ];

    public function poli()
    {
        return $this->belongsToMany(Poli::class);
    }
}
