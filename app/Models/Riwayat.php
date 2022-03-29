<?php

namespace App\Models;

use App\Models\dokter;
use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Riwayat extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public $timestamps = false;

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
    public function dokter(){
        return $this->belongsTo(dokter::class, 'dokter_id');
    }
}
