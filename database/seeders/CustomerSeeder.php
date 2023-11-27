<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
 

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer')->insert([
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386691',
                'address'=> '6/1 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386692',
                'address'=> '6/2 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386693',
                'address'=> '6/3 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386694',
                'address'=> '6/4 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386695',
                'address'=> '6/5 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386696',
                'address'=> '6/6 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386697',
                'address'=> '6/7 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386698',
                'address'=> '6/8 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386699',
                'address'=> '6/9 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => Str::random(10),
                'last_name' => Str::random(),
                'email' => Str::random(10).'@gmail.com',
                'phone_no'=> '0615386690',
                'address'=> '6/10 ม.3',
                'province'=> 'Chanthaburi',
                'zip_code'=> '22000',
                'location'=> '12.607018456325457, 102.10432499190505',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
