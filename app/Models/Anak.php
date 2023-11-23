<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anak extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'umur',
        'jenis_kelamin',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function imun(): HasMany
    {
        return $this->hasMany(Imun::class);
    }

    public function layanan_anak(): HasMany
    {
        return $this->hasMany(LayananAnak::class);
    }
}
