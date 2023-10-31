<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusinessType;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessType::create([
            'name' => 'Pharmacies',
        ]);

        BusinessType::create([
            'name' => 'Online retailers',
        ]);

        BusinessType::create([
            'name' => 'Supermarkets',
        ]);

        BusinessType::create([
            'name' => 'Distributors',
        ]);
    }
}
