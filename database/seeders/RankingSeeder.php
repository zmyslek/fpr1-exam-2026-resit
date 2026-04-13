<?php

namespace Database\Seeders;

use App\Models\Ranking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RankingSeeder extends Seeder
{
    use CsvReadable;

    /**
     * Construct a new RankingSeeder
     */
    public function __construct()
    {
        $this->path = "seed_files/rankings.csv";
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
            Ranking::create($data);
        });
    }
}
