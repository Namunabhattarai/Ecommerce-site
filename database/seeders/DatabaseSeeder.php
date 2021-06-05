<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\product;
use \App\Models\category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // product::truncate();
        // category::truncate();
        // \App\Models\User::factory(10)->create();
        $category=\App\Models\category::create([
            'name'=>'Accessories',
            'description'=>'This category contains accessories'
        ]);

        \App\Models\product::factory(5)->create([
            'category_id'=>3
        ]

        );
    }
}
