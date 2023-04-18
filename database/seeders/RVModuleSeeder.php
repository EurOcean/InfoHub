<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RVModule;
use File;

class RVModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RVModule::truncate();

        $json = File::get(public_path("json_db/rid/RVModule.json"));
        $rid_institutions = json_decode($json);

        foreach ($rid_institutions as $key => $value) {
            RVModule::create([
                "id_rvmodule" => $value->ID_RVModule,
                "ices_shipcode" => $value->ices_shipcode,
                "mmsi" => $value->mmsi,
                "imo" => $value->imo
            ]);
        }
    }
}
