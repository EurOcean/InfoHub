<?php

namespace Database\Seeders;
use App\Models\Partnership;
use File;

use Illuminate\Database\Seeder;

class kg_tbl_Partnerships extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Partnership::truncate();

        $json = File::get(public_path("json_db/kg/kg_tbl_partnerships.json"));
        $tbl_partnerships = json_decode($json);

        foreach ($tbl_partnerships as $key => $value) {
            Partnership::create([
                "id" => $value->ID,
                "name" => $value->Name,
                "description" => $value->Description,
                "created" => $value->Created,
                "createdBy" => $value->CreatedBy,
                "lastUpdt" => $value->LastUpdt,
                "lastUpdtBy" => $value->LastUpdtBy
            ]);
        }

    }
}
