<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert
        ([
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/001.png',
                'product_type_id'=> '1',
                'brand_id' => '1',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/002.png',
                'product_type_id'=> '2',
                'brand_id' => '2',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/003.png',
                'product_type_id'=> '3',
                'brand_id' => '3',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/004.png',
                'product_type_id'=> '4',
                'brand_id' => '4',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/005.png',
                'product_type_id'=> '5',
                'brand_id' => '5',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/006.png',
                'product_type_id'=> '6',
                'brand_id' => '6',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/007.png',
                'product_type_id'=> '7',
                'brand_id' => '7',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/008.png',
                'product_type_id'=> '8',
                'brand_id' => '8',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/009.png',
                'product_type_id'=> '9',
                'brand_id' => '9',
            ],
            [
                'product_name' => Str::random(20),
                'product_desc' => Str::random(40),
                'product_image' => 'img/010.png',
                'product_type_id'=> '10',
                'brand_id' => '10',
            ],
        ]);
    }
}
