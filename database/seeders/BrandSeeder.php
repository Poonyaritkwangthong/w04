<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
 

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert([
            ['brand_name' => 'Logitech'],
            ['brand_name' => 'HyperX'],
            ['brand_name' => 'Steelseries'],
            ['brand_name' => 'Loga'],
            ['brand_name' => 'Asus'],
            ['brand_name' => 'Corsair'],
            ['brand_name' => 'Ducky'],
            ['brand_name' => 'Glorious'],
            ['brand_name' => 'Keychorn'],
            ['brand_name' => 'Nubwo'],
        ]);
    }
}
