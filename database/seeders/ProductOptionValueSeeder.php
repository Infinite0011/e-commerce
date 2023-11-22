<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Lunar\Models\ProductOptionValue;

class ProductOptionValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOptionValue::create([
            'name' => [
                'en' => 'One Time - 1',
            ],
            'product_option_id' => 1001,
            'position' => 0
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'One Time - 2',
            ],
            'product_option_id' => 1001,
            'position' => 0
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'One Time - 3',
            ],
            'product_option_id' => 1001,
            'position' => 0
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'Subscription - 1',
            ],
            'product_option_id' => 1001,
            'position' => 0
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'Subscription - 2',
            ],
            'product_option_id' => 1001,
            'position' => 0
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'Subscription - 3',
            ],
            'product_option_id' => 1001,
            'position' => 0
        ]);
    }
}
