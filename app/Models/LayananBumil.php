<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
