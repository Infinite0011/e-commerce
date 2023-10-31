<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

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
            'id' => 3,
            'name' => 'wholesale',
            'guard_name' => 'user',
        ]);

        Role::create([
            'id' => 4,
            'name' => 'referal',
            'guard_name' => 'user',
        ]);
    }
}
