<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
 

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_type')->insert([
            ['product_type_name' => 'Case'],
            ['product_type_name' => 'CPU'],
            ['product_type_name' => 'RAM'],
            ['product_type_name' => 'Mainboard'],
            ['product_type_name' => 'Monitor'],
            ['product_type_name' => 'HHD'],
            ['product_type_name' => 'SSD'],
            ['product_type_name' => 'VGA'],
            ['product_type_name' => 'Cooler'],
            ['product_type_name' => 'Power supply'],
        ]);
    }
}
