<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PicNumber;
use File;

class PicNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PicNumber::truncate();
        $csvData = fopen(public_path('json_db/kg/pic_number.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 10000000, ',')) !== false) {
            if (!$transRow) {
                PicNumber::create([
                    'id_institution' => $data['0'],
                    'pic' => $data['1'] ?? null,
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
