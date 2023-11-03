<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CollectionSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(TaxSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderTypeSeeder::class);
        $this->call(OneTimePurchaseSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(BusinessStateSeeder::class);
        $this->call(BusinessTypeSeeder::class);
        $this->call(PageInformationSeeder::class);
    }
}
