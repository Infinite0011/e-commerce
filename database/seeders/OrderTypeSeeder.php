<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderType;

class OrderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderType::insert([
            'id' => 1,
            'name' => 'Subscribe & Save up to 20%',
        ]);
        
        OrderType::insert([
            'id' => 2,
            'name' => 'One Time Purchase',
        ]);
    }
}
