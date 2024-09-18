<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Seed the brands table.
     *
     * @return void
     */
    public function run(): void
    {
        $brands = [
            ['slug' => 'apple', 'name' => 'Apple'],
            ['slug' => 'samsung', 'name' => 'Samsung'],
            ['slug' => 'google', 'name' => 'Google'],
            ['slug' => 'sony', 'name' => 'Sony'],
            ['slug' => 'microsoft', 'name' => 'Microsoft'],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->updateOrInsert(
                ['slug' => $brand['slug']], 
                ['name' => $brand['name']]
            );
        }
    }
}
