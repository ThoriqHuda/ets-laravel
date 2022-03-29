<?php

namespace Database\Seeders;

use App\Models\dokter;
use App\Models\Pasien;
use App\Models\Riwayat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pasien::create([
            'nama' => 'Dodi',
        ]); 
        Pasien::create([
            'nama' => 'Kiki',
        ]); 
        Pasien::create([
            'nama' => 'Nana',
        ]); 
        dokter::create([
            'nama' => 'Dr.satu',
        ]); 
        dokter::create([
            'nama' => 'Dr.kaka',
        ]); 
        dokter::create([
            'nama' => 'Dr.tiga',
        ]); 

        Riwayat::factory(20)->create();

    }
}
