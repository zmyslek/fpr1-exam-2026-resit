<?php

namespace Database\Seeders;

use App\Models\Playfield;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayfieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Playfield::factory()->count(10)->create();
    }
}
