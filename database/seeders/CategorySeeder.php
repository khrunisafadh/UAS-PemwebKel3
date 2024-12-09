<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('category')->insert([
            [
                'name' => 'Nasional',
            ],
            [
                'name' => 'Internasional',
            ],
            [
                'name' => 'Olahraga',
            ],
            [
                'name' => 'Politik',
            ],
            [
                'name' => 'Gaya Hidup',
            ],
            [
                'name' => 'Teknologi',
            ],
            [
                'name' => 'Seni',
            ],
            [
                'name' => 'Hiburan',
            ],
        ]);
    }
}
