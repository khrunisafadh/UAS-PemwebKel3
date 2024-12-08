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
                'name' => 'National',
            ],
            [
                'name' => 'International',
            ],
            [
                'name' => 'Sport',
            ],
            [
                'name' => 'Politic',
            ],
            [
                'name' => 'LifeStyle',
            ],
            [
                'name' => 'Technology',
            ],
            [
                'name' => 'Art',
            ],
            [
                'name' => 'Entertainment',
            ],
        ]);
    }
}
