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
            'quantity' => 6,
            'discount' => 15
        ]);
        
        OneTimePurchase::insert([
            'id' => 2,
            'quantity' => 3,
            'discount' => 10
        ]);
        
        OneTimePurchase::insert([
            'id' => 3,
            'quantity' => 1,
            'discount' => null
        ]);
    }
}
