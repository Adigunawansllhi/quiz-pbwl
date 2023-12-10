<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Golongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'gol_kode',
        'gol_nama',
    ];

    // public function pelanggans(): HasMany
    // {
    //     return $this->hasMany(Pelanggan::class, 'gol_id', 'id');
    // }
}
