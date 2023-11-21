<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'umur',
        'jenis_kelamin',
    ];
}
