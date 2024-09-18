<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Seed the categories table.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            ['slug' => 'electronics', 'name' => 'Electronics'],
            ['slug' => 'furniture', 'name' => 'Furniture'],
            ['slug' => 'clothing', 'name' => 'Clothing'],
            ['slug' => 'toys', 'name' => 'Toys'],
            ['slug' => 'books', 'name' => 'Books'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->updateOrInsert(
                ['slug' => $category['slug']], 
                ['name' => $category['name']]
            );
        }
    }
}
