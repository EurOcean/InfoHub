<?php

namespace Database\Seeders;
use App\Models\ProjectInstitution;
use File;

use Illuminate\Database\Seeder;

class kg_tbl_ProjectInstitutions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectInstitution::truncate();

        $json = File::get(public_path("json_db/kg/kg_tbl_projectInstitutions.json"));
        $tbl_projectInstitutions = json_decode($json);

        foreach ($tbl_projectInstitutions as $key => $value) {
            ProjectInstitution::create([
                "id" => $value->ID,
                "projectID" => $value->ProjectID,
                "institutionID" => $value->InstitutionID,
                "partnershipID" => $value->PartnershipID,
                "contribution" => $value->Contribution,
                "created" => $value->Created,
                "createdBy" => $value->CreatedBy,
                "lastUpdt" => $value->LastUpdt,
                "lastUpdtBy" => $value->LastUpdtBy
            ]);
        }
    }
}
