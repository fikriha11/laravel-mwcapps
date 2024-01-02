<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class Pengurus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penguruses')->insert([
            'name' => 'KH. Umar Saifudin',
            'periode' => '2023 - 2028',
            'jabatan' => 'mustasyar',
            'struktur' => 'mustasyar',
            'image' => 'umarsaifudin.jpg',
        ]);
    }
}