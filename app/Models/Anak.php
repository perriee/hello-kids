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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function imun()
    {
        return $this->hasMany(Imun::class);
    }

    public function layanan_anak()
    {
        return $this->hasMany(LayananAnak::class);
    }
}
