<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RidInstitutions;
use File;

class rid_dob_InstitutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RidInstitutions::truncate();

        $json = File::get(public_path("json_db/rid/dob_institutions.json"));
        $rid_institutions = json_decode($json);

        foreach ($rid_institutions as $key => $value) {
            RidInstitutions::create([
                "id_institution" => $value->ID_Institution,
                "old_rid_id" => $value->Old_RID_ID,
                "edmo_id" => $value->EDMO_ID,
                "kg_id" => $value->KG_ID,
                "id_country" => $value->ID_Country,
                "id_status_institution" => $value->ID_Status_Institution,
                "institution_name" => $value->Name_Institution,
                "acronym_inEnglish" => $value->Acronym_english,
                "institution_name_inEnglish" => $value->Institution_English,
                "institution_name_native" => $value->Institution_Native,
                "street" => $value->Street,
                "postCode" => $value->PostCode,
                "city" => $value->City,
                "website" => $value->Website,
                "latitude" => $value->Latitude,
                "longitude" => $value->Longitude
            ]);
        }
    }
}
