<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisImun extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_imun',
        'deskripsi',
    ];

    public function imun()
    {
        return $this->hasMany(Imun::class);
    }
}
