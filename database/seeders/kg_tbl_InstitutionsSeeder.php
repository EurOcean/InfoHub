<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Institution;
use File;

class kg_tbl_InstitutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::truncate();

        $json = File::get(public_path("json_db/kg/kg_tbl_institutions_update.json"));
        $institutions = json_decode($json);

        foreach ($institutions as $key => $value) {
            Institution::create([
                "id" => $value->ID,
                "CountryID" => $value->CountryID,
                "name" => $value->Name,
                "institution_acronym" => $value->Acronym,
                "webpage" => $value->Webpage,
                "latitude" => $value->latitude,
                "longitude" => $value->longitude,
                "created" => $value->Created,
                "createdBy" => $value->CreatedBy,
                "lastUpdt" => $value->LastUpdt,
                "lastUpdtBy" => $value->LastUpdtBy,
                "email" => $value->Email,
                "typeID" => $value->TypeID,
                "nativeName" => $value->NativeName,
                "nativeAcronym" => $value->NativeAcronym,
                "address" => $value->Address,
                "zipCode" => $value->ZipCode,
                "city" => $value->City,
                "state" => $value->State,
                "phone" => $value->Phone,
                "fax" => $value->Fax,
                "url" => $value->URL,
                "RID_id" => $value->RID_id,
                "id_1" => $value->id_1,
                "id_2" => $value->id_2,
                "id_3" => $value->id_3,
                "id_4" => $value->id_4,
                "id_5" => $value->id_5,
                "funding" => $value->Funding,
            ]);
        }
    }
}
