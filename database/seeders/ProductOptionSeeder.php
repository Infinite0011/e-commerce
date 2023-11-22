<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Lunar\Models\ProductOption;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOption::insert([
            'id' => 1001,
            'handle' => 'subscription',
            'name' => json_encode([
                'en' => 'Subscription',
            ]),
            'label' => json_encode([
                'en' => 'Subscription',
            ]),
            'position' => 0
        ]);
    }
}
