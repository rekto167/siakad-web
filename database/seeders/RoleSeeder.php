<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'super_admin',
            'alias' => 'Super Admin'
        ]);
        Role::create([
            'name' => 'admin',
            'alias' => 'Admin'
        ]);

        Role::create([
            'name' => 'guru',
            'alias' => 'Guru'
        ]);
        Role::create([
            'name' => 'murid',
            'alias' => 'Murid'
        ]);

    }
}
