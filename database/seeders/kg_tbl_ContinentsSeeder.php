<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Continent;
use File;

class kg_tbl_ContinentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Continent::truncate();

        $json = File::get(public_path("json_db/kg/kg_tbl_continents.json"));
        $tbl_continents = json_decode($json);

        foreach ($tbl_continents as $key => $value) {
            Continent::create([
                "id" => $value->ID,
                "name" => $value->Name,
                "description" => $value->Description,
                "createdBy" => $value->Created,
                "lastUpdtBy" => $value->LastUpdt,
                "RID_id" => $value->RID_id
            ]);
        }
    }
}
