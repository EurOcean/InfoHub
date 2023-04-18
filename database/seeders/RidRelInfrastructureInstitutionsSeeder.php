<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RidRelInfrastructureInstitution;
use File;

class RidRelInfrastructureInstitutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RidRelInfrastructureInstitution::truncate();

        $json = File::get(public_path("json_db/rid/dob_relInfrastructureInstitution.json"));
        $rid_institutions = json_decode($json);

        foreach ($rid_institutions as $key => $value) {
            RidRelInfrastructureInstitution::create([
                "id_infrastructure" => $value->ID_Infrastructure,
                "status" => $value->Status,
                "id_institution" => $value->ID_Institution
            ]);
        }
    }
}
