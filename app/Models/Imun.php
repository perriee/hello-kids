<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imun extends Model
{
    use HasFactory;

    protected $fillable = [
        'anak_id',
        'jenis_imun_id',
    ];

    public function anak(): BelongsTo
    {
        return $this->belongsTo(Anak::class);
    }

    public function jenis_imun(): BelongsTo
    {
        return $this->belongsTo(JenisImun::class);
    }
}
