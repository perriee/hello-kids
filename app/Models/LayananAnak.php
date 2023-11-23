<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LayananAnak extends Model
{
    use HasFactory;

    protected $fillable = [
        'anak_id',
        'lingkar_kepala',
        'tinggi_badan',
        'berat_badan',
    ];

    public function anak(): BelongsTo
    {
        return $this->belongsTo(Anak::class);
    }
}
