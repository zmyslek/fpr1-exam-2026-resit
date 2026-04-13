<?php

namespace Database\Seeders;

use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    use CsvReadable;

    /**
     * Construct a new ResultSeeder
     */
    public function __construct()
    {
        $this->path = "seed_files/results.csv";
        $this->delimiter = ";";
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
            $data['time'] = Carbon::createFromFormat('G:i', $data['time']);

            Result::create($data);
        });
    }
}
