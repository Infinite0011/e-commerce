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
                'en' => 'One Time - 1 Bottle Discount %',
            ],
            'product_option_id' => 1001,
            'position' => 0,
            'description' => '1 Bottle',
            'quantity' => 1
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'One Time - 3 Bottle Discount %',
            ],
            'product_option_id' => 1001,
            'position' => 0,
            'description' => '3 Bottles - 10% off',
            'quantity' => 3
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'One Time - 6 Bottle Discount %',
            ],
            'product_option_id' => 1001,
            'position' => 0,
            'description' => '6 Bottles - 15% off',
            'quantity' => 6
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'Subscription - 1 Bottle Discount %',
            ],
            'product_option_id' => 1001,
            'position' => 0,
            'description' => '1 Bottle - 10% off<br>Every month',
            'quantity' => 1,
            'duration' => 1
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'Subscription - 3 Bottle Discount %',
            ],
            'product_option_id' => 1001,
            'position' => 0,
            'description' => '3 Bottles - 15% off<br>Every 3 months',
            'quantity' => 3,
            'duration' => 3
        ]);
        
        ProductOptionValue::create([
            'name' => [
                'en' => 'Subscription - 6 Bottle Discount %',
            ],
            'product_option_id' => 1001,
            'position' => 0,
            'description' => '6 Bottles - 20% off<br>Every 6 months',
            'quantity' => 6,
            'duration' => 6
        ]);
    }
}
