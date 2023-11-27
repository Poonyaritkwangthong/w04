<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promotion')->insert([
            [   'promotion_name' => 'lol1',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '100',
            ],
            [   'promotion_name' => 'lol2',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '90',
            ],
            [   'promotion_name' => 'lol3',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '80',
            ],
            [   'promotion_name' => 'lol4',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '70',
            ],
            [   'promotion_name' => 'lol5',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '60',
            ],
            [   'promotion_name' => 'lol6',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '50',
            ],
            [   'promotion_name' => 'lol7',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '40',
            ],
            [   'promotion_name' => 'lol8',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '30',
            ],
            [   'promotion_name' => 'lol9',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '20',
            ],
            [   'promotion_name' => 'lol10',
                'promotion_start' => '2024-11-30',
                'promotion_end' => '2024-12-10',
                'percent_discount' => '10',
            ],

        ]);
    }
}
