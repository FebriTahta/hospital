<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori','slug_kategori'
    ];

    public function posting()
    {
        return $this->belongsToMany(Posting::class);
    }
}
