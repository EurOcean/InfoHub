<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RidKgMerge;
use File;

class KG_RID_mergeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RidKgMerge::truncate();
        $csvData = fopen(public_path('json_db/cordis/KG_RID_merge.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 10000000, ',')) !== false) {
            if (!$transRow) {
                RidKgMerge::create([
                    'id_institution' => $data['0'] ?? null,
                    'id_kg' => $data['1'] ?? null,
                    'picNumber' => $data['2'] ?? null,
                    'vatNumber' => $data['3'] ?? null,
                    'name' => $data['4'] ?? null,
                    'shortName' => $data['5'] ?? null,
                    'activityType' => $data['6'] ?? null,
                    'street' => $data['7'] ?? null,
                    'postCode' => $data['8'] ?? null,
                    'city' => $data['9'] ?? null,
                    'country' => $data['10'] ?? null,
                    'geolocation' => $data['11'] ?? null,
                    'organizationURL' => $data['12'] ?? null,
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
