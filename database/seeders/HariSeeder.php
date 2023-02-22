<?php

namespace Database\Seeders;

use App\Models\Hari;
use Illuminate\Database\Seeder;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hari::create([
            'nama' => 'Senin',
            'slug' => 'senin'
        ]);
        Hari::create([
            'nama' => 'Selasa',
            'slug' => 'selasa'
        ]);
        Hari::create([
            'nama' => 'Rabu',
            'slug' => 'rabu'
        ]);
        Hari::create([
            'nama' => 'Kamis',
            'slug' => 'kamis'
        ]);
        Hari::create([
            'nama' => "Jum'at",
            'slug' => "jumat"
        ]);
        Hari::create([
            'nama' => 'Sabtu',
            'slug' => 'sabtu'
        ]);
        Hari::create([
            'nama' => 'Minggu',
            'slug' => 'minggu'
        ]);

    }
}
