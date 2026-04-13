<?php

namespace Database\Seeders;

use App\Models\Playfield;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Playfield::factory()
            ->count(10)
            ->hasGames(5)
            ->create();
    }
}
