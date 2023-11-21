<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imun extends Model
{
    use HasFactory;

    protected $fillable = [
        'anak_id',
        'jenis_imun_id',
    ];
}
