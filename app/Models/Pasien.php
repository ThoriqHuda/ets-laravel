<?php

namespace App\Models;

use App\Models\Riwayat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;

    public function riwayat(){
        return $this->hasMany(Riwayat::class);
    }
}
