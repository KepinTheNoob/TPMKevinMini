<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CategorySeeder::class);
        $this->call(GenshinSeeder::class);
        
        \App\Models\Genshin::factory(10)->create([
            'Name' => fake()->company(),
            'Element' => fake()->firstName(),
            'Region' => fake()->firstName(),
            'Image' => fake()->imageUrl(),
            'CategoryId' => random_int(1, 2)
        ]);
    }
}
