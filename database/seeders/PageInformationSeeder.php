<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageInformation;

class PageInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageInformation::create([
            'page_slug' => 'about',
        ]);

        PageInformation::create([
            'page_slug' => 'blog',
        ]);

        PageInformation::create([
            'page_slug' => 'blog-view',
        ]);
        PageInformation::create([
            'page_slug' => 'checkout',
        ]);

        PageInformation::create([
            'page_slug' => 'checkout-success',
        ]);

        PageInformation::create([
            'page_slug' => 'collection',
        ]);

        PageInformation::create([
            'page_slug' => 'contact-us',
        ]);

        PageInformation::create([
            'page_slug' => 'my-address',
        ]);

        PageInformation::create([
            'page_slug' => 'my-edit-address',
        ]);

        PageInformation::create([
            'page_slug' => 'my-edit-user',
        ]);

        PageInformation::create([
            'page_slug' => 'my-order',
        ]);

        PageInformation::create([
            'page_slug' => 'my-referal-information',
        ]);

        PageInformation::create([
            'page_slug' => 'home',
        ]);

        PageInformation::create([
            'page_slug' => 'in-the-press',
        ]);

        PageInformation::create([
            'page_slug' => 'login-register',
        ]);

        PageInformation::create([
            'page_slug' => 'product',
        ]);

        PageInformation::create([
            'page_slug' => 'referal-form',
        ]);

        PageInformation::create([
            'page_slug' => 'search',
        ]);

        PageInformation::create([
            'page_slug' => 'shop',
        ]);

        PageInformation::create([
            'page_slug' => 'testimonial-new',
        ]);

        PageInformation::create([
            'page_slug' => 'whole-sale-form',
        ]);
    }
}
