<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use File;

class kg_tbl_ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();

        $json = File::get(public_path("json_db/kg/kg_tbl_projects_update_2.json"));
        $tbl_projects = json_decode($json);

        foreach ($tbl_projects as $key => $value) {
            Project::create([
                "id" => $value->ID,
                "@id" => "$value->ID",
                "source_ID" => $value->Source_ID,
                "RID" => $value->RID,
                "contractNumber" => $value->ContractNumber,
                "acronym" => $value->Acronym,
                "title" => $value->Title,
                "programmeID" => $value->ProgrammeID,
                "startDate" => $value->StartDate,
                "endDate" => $value->EndDate,
                "projectFunding" => $value->ProjectFunding,
                "summary" => $value->Summary,
                "webSite" => $value->WebSite,
                "informationSource" => $value->InformationSource,
                "onlineStatus" => $value->OnlineStatus,
                "adminNotes" => $value->AdminNotes,
                "created" => $value->Created,
                "createdBy" => $value->CreatedBy,
                "lastUpdt" => $value->LastUpdt,
                "lastUpdtBy" => $value->LastUpdtBy,
                "contactPerson" => $value->ContactPerson,
                "descriptor1ID" => $value->Descriptor1ID,
                "descriptor2ID" => $value->Descriptor2ID,
                "descriptor3ID" => $value->Descriptor3ID,
                "descriptor4ID" => $value->Descriptor4ID,
                "url_finalReport" => $value->URLFinalReport,
                "coordinatorEmail" => $value->CoordinatorEmail,
                "eurOceanRIDProject" => $value->EurOceanRIDProject,
                "startYear" => $value->StartYear,
                "endYear" => $value->EndYear,
            ]);
        }
    }
}
