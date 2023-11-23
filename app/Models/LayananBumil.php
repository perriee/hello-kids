<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LayananBumil extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'usia_kandungan',
        'berat_badan',
        'tensi',
        'lingkar_lengan',
        'keluhan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
