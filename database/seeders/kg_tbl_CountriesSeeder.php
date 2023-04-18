<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Country;
use File;

class kg_tbl_CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();

        $json = File::get(public_path("json_db/kg/kg_tbl_countries.json"));
        $tbl_countries = json_decode($json);

        foreach ($tbl_countries as $key => $value) {
            Country::create([
                "id" => $value->ID,
                "continentID" => $value->ContinentID,
                "code" => $value->Code,
                "country_name" => $value->Name,
                "isEU" => $value->IsEU,
                "latitude" => $value->latitude,
                "longitude" => $value->longitude,
                "created" => $value->Created,
                "createdBy" => $value->CreatedBy,
                "LastUpdt" => $value->LastUpdt,
                "lastUpdBy" => $value->LastUpdtBy,
                "RID_id" => $value->RID_id,
                "id_1" => $value->id_1,
                "id_2" => $value->id_2,
                "id_3" => $value->id_3,
                "id_4" => $value->id_4,
                "id_5" => $value->id_5,
                "various" => $value->Various,
                "HIDE_ON_FILTERS" => $value->HIDE_ON_FILTERS,
            ]);
        }
    }
}
