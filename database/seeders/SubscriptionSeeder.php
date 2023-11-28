<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscription::insert([
            'id' => 1,
            'duration' => 1,
            'duration_type' => 'month',
            'quantity' => 1,
            'discount' => 10,
            'name' => '1 Bottle - 10% off Every month'
        ]);
        
        Subscription::insert([
            'id' => 2,
            'duration' => 3,
            'duration_type' => 'month',
            'quantity' => 3,
            'discount' => 15,
            'name' => '3 Bottles - 15% off Every 3 months'
        ]);
        
        Subscription::insert([
            'id' => 3,
            'duration' => 6,
            'duration_type' => 'month',
            'quantity' => 6,
            'discount' => 20,
            'name' => '6 Bottles - 20% off Every 6 months'
        ]);
    }
}
