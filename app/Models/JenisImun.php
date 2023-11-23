<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisImun extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_imun',
        'deskripsi',
    ];

    public function imun(): HasMany
    {
        return $this->hasMany(Imun::class);
    }
}
