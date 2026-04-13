<?php

namespace Database\Seeders;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    use CsvReadable;

    /**
     * Construct a new GameSeeder
     */
    public function __construct()
    {
        $this->path = "seed_files/games.csv";
        $this->header_row = 0;
        $this->start_row = 1;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->readCsvData(function ($data) {
            // Parse the date (eg. 05-02-2019) to an importable object
            $data['date'] = Carbon::createFromFormat('d-m-Y', $data['date']);
            // Parse the time (eg. 19.15) to an importable object
            $data['time'] = Carbon::createFromFormat('G.i', $data['time']);
            Game::create($data);
        });
    }
}
