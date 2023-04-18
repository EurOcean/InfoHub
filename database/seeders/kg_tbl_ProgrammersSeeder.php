<?php

namespace Database\Seeders;
use App\Models\Programmer;
use File;

use Illuminate\Database\Seeder;

class kg_tbl_ProgrammersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programmer::truncate();

        $json = File::get(public_path("json_db/kg/kg_tbl_programmers.json"));
        $tbl_programmers = json_decode($json);

        foreach ($tbl_programmers as $key => $value) {
            Programmer::create([
                "id" => $value->ID,
                "programmeTypeID" => $value->ProgrammeTypeID,
                "programmeLevelID" => $value->ProgrammeLevelID,
                "name" => $value->Name,
                "acronym" => $value->Acronym,
                "description" => $value->Description,
                "webpage" => $value->Webpage,
                "created" => $value->Created,
                "createdBy" => $value->CreatedBy,
                "lastUpdt" => $value->LastUpdt,
                "lastUpdtBy" => $value->LastUpdtBy,
                "countryID" => $value->CountryID,
                "RID_id" => $value->RID_id,
                "id_1" => $value->id_1,
                "id_2" => $value->id_2,
                "id_3" => $value->id_3,
                "id_4" => $value->id_4,
                "id_5" => $value->id_5,
                "richTextContent1" => $value->RichTextContent1,
                "richTextContent2" => $value->RichTextContent2,
            ]);
        }
    }
}
