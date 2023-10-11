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
            'duration' => 6,
            'duration_type' => 'month',
            'quantity' => 6,
            'discount' => 20,
        ]);
        
        Subscription::insert([
            'id' => 2,
            'duration' => 3,
            'duration_type' => 'month',
            'quantity' => 3,
            'discount' => 15,
        ]);
        
        Subscription::insert([
            'id' => 3,
            'duration' => 1,
            'duration_type' => 'month',
            'quantity' => 1,
            'discount' => 10,
        ]);
    }
}
