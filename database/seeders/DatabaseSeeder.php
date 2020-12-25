<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Setting;
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
        // Pages array
        $pages = [
            [
                'slug' => 'home',
                'status' => true
            ],
            [
                'slug' => 'products',
                'status' => true
            ],
            [
                'slug' => 'about-us',
                'status' => true
            ],
            [
                'slug' => 'contact-us',
                'status' => true
            ],
            [
                'slug' => 'cart',
                'status' => true
            ],
            [
                'slug' => 'blog-details',
                'status' => true
            ],
            [
                'slug' => 'blog',
                'status' => true
            ],
            [
                'slug' => 'cabinet-info',
                'status' => true
            ],
            [
                'slug' => 'cabinet-orders',
                'status' => true
            ],
            [
                'slug' => 'details',
                'status' => true
            ],
            [
                'slug' => 'favourites',
                'status' => true
            ],
            [
                'slug' => 'purchase-auth',
                'status' => true
            ],
            [
                'slug' => 'purchase-un-auth',
                'status' => true
            ],
            [
                'slug' => 'wine-club',
                'status' => true
            ],
        ];

        // Settings Array
        $settings = [
            [
                'key' => 'phone',
            ],
            [
                'key' => 'contact_email',
            ],
            [
                'key' => 'address',
            ],
            [
                'key' => 'facebook',
            ],
            [
                'key' => 'twitter',
            ],
            [
                'key' => 'behance',
            ],
            [
                'key' => 'linkedin',
            ],
            [
                'key' => 'instagram',
            ],
        ];

        // Insert pages
        Page::insert($pages);

        // Insert settings
        Setting::insert($settings);
    }
}
