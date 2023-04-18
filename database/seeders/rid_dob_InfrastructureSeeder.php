<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RidInfrastructure;
use File;

class rid_dob_InfrastructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RidInfrastructure::truncate();

        $json = File::get(public_path("json_db/rid/dob_infrastructure_update.json"));
        $rid_infrastructures = json_decode($json);

        foreach ($rid_infrastructures as $key => $value) {
            RidInfrastructure::create([
                "id_infrastructure" => $value->ID_Infrastructure,
                "name_infrastructure" => $value->name,
                "id_country" => $value->ID_Country,
                "id_category" => $value->ID_Category,
                "type" => $value->Type,
                "year_built" => $value->year_built,
                "year_last_refit" => $value->year_last_refit,
                "length" => $value->length,
                "max_operating_depth" => $value->max_operating_depth,
                "contact_person" => $value->Contact_person,
                "email" => $value->email,
                "id_relationWithInfrastructure" => $value->ID_RelationWithInfrastructure,
                "phone" => $value->phone,
                "address" => $value->Address,
                "access_conditions" => $value->access_conditions,
                "data_examples" => $value->data_examples,
                "url_infrastructure" => $value->urlinfrastructure,
                "x" => $value->x,
                "y" => $value->y,
                "location" => $value->location,
                "services_offered" => $value->services_offered,
                "last_update" => $value->Last_Update,
                "id_status_act" => $value->ID_status_act,
                "isConfirmed" => $value->isConfirmed,
                "editOriginalID" => $value->editOriginalID
            ]);
        }
    }
}
