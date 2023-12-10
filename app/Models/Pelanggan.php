<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'gol_id', 'pel_no', 'pel_nama', 'pel_alamat', 'pel_hp', 'pel_ktp', 'pel_seri', 'pel_meteran',
        'pel_aktif', 'user_id'
    ];

    public function golongan(): HasOne
    {
        return $this->hasOne(Golongan::class, 'id', 'gol_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
