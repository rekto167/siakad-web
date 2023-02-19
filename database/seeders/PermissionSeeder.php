<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'tambah user'
        ]);
        Permission::create([
            'name' => 'tambah mata pelajaran'
        ]);
        Permission::create([
            'name' => 'input nilai'
        ]);
        Permission::create([
            'name' => 'print raport'
        ]);
        Permission::create([
            'name' => 'ubah nilai'
        ]);

    }
}
