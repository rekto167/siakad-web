<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => '1',
                'nama_lengkap' => 'Kelas 1',
                'slug' => 'kelas_1'
            ],
            [
                'nama' => '2',
                'nama_lengkap' => 'Kelas 2',
                'slug' => 'kelas_2'
            ],
            [
                'nama' => '3',
                'nama_lengkap' => 'Kelas 3',
                'slug' => 'kelas_3'
            ],
            [
                'nama' => '4',
                'nama_lengkap' => 'Kelas 4',
                'slug' => 'kelas_4'
            ],
            [
                'nama' => '5',
                'nama_lengkap' => 'Kelas 5',
                'slug' => 'kelas_5'
            ],
            [
                'nama' => '6',
                'nama_lengkap' => 'Kelas 6',
                'slug' => 'kelas_6'
            ]
        ];

        foreach ($data as $item){
            Level::create($item);
        }
    }
}
