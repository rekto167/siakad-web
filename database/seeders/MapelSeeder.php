<?php

namespace Database\Seeders;

use App\Http\Controllers\MapelController;
use App\Models\Mapel;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Bahasa Indonesia'],
            ['nama' => 'Matematika'],
            ['nama' => 'IPA'],
            ['nama' => 'IPS'],
            ['nama' => 'Bahasa Inggris'],
            ['nama' => 'Seni Budaya'],
            ['nama' => 'Pendidikan Jasmani'],
            ['nama' => 'Agama'],
        ];
        foreach ($data as $item){
            Mapel::create($item);
        }
    }
}
