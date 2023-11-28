<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OneTimePurchase;

class OneTimePurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OneTimePurchase::insert([
            'id' => 1,
            'quantity' => 1,
            'discount' => 0,
            'name' => '1 Bottle'
        ]);

        OneTimePurchase::insert([
            'id' => 2,
            'quantity' => 3,
            'discount' => 10,
            'name' => '3 Bottles - 10% off'
        ]);
        
        OneTimePurchase::insert([
            'id' => 3,
            'quantity' => 6,
            'discount' => 15,
            'name' => '6 Bottles - 15% off'
        ]);
    }
}
