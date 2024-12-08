<?php

namespace Database\Seeders;

use App\Models\News;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(CategorySeeder::class);
        
        User::factory()->create([
            'name' => 'TestUser',
            'email' => 'test@example.com',
            'is_admin' => true
        ]);

        News::factory()->count(1000)->create();
    }
}
