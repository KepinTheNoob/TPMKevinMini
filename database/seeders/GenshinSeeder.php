<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenshinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Genshin::create([
            'Name' => 'Lisa',
            'Element' => 'Electro',
            'Region' => 'Mondstadt',
            'Image' => 'test',
            'CategoryId' => 1
        ]);
    }
}
