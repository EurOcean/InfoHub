<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Project as Project;
use App\Http\Resources\Project as ProjectResource;
use App\Models\ProjectInstitution;
use Spatie\SchemaOrg\Schema;

class ProjectsController extends Controller
{
    public function projects_index()
    {
        $projects = Project::paginate(100);
        return ProjectResource::collection($projects)->collection;
    }

    // Show item infohub
    public function show_project($id)
    {

        $project = ProjectInstitution::join('projects', 'project_institutions.projectID', '=', 'projects.id')
        ->join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')
        ->whereIn('programmeID', [1, 4])
        ->where('project_institutions.projectID', $id)
        ->first();
        
        $programmeID = ProjectInstitution::join('projects', 'project_institutions.projectID', '=', 'projects.id')
        ->join('programmers', 'projects.programmeID', '=', 'programmers.id')
        ->where('project_institutions.projectID', $project->projectID)
        ->first();


        $coordinators = ProjectInstitution::join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')
        ->join('projects', 'project_institutions.projectID', '=', 'projects.id')
        ->join('countries', 'institutions.countryID', '=', 'countries.id')
        ->join('partnerships', 'project_institutions.partnershipID', '=', 'partnerships.id')
        ->where('project_institutions.partnershipID', 1)
        ->where('project_institutions.projectID', $id)
        ->select('institutions.name AS institution_name', 'institutions.institution_acronym', 'country_name' )
        ->get();

        $partners = ProjectInstitution::join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')
        ->join('projects', 'project_institutions.projectID', '=', 'projects.id')
        ->join('countries', 'institutions.countryID', '=', 'countries.id')
        ->join('partnerships', 'project_institutions.partnershipID', '=', 'partnerships.id')
        ->where('project_institutions.partnershipID', 2)
        ->select('institutions.name AS institution_name', 'institution_acronym', 'country_name')
        ->where('project_institutions.projectID', $id)
        ->get();

        return response()->json([
            "@context" => [
                '@vocab' => 'https://schema.org/'   
            ],
            "@type" => 'Project',
            "contractNumber" => $project->contractNumber,
            "acronym" => $project->acronym,
            "title" => $project->title,
            "programmeID" => $programmeID->name,
            "projectFunding" => $project->projectFunding,
            "summary" => $project->summary,
            "webSite" => $project->webSite,
            "startYear" => $project->startYear,
            "endYear" => $project->endYear,
            'coordinator' => $coordinators,
            "partners" => $partners
        ], 201);
    }

    // Create Info to infoHub
    public function infohub_create()
    {
        $projectsInfoHub = Project::orderBy('id', 'DESC')->paginate(50);
        return response()->json([
            'source_ID' => $source_ID,
            'RID' => $RID,
            'contractNumber' => $contractNumber,
            'acronym' => $acronym,
            'title' => $title,
            'programmeID' => $programmeID,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'projectFunding' => $projectFunding,
            'summary' => $summary,
            'webSite' => $webSite,
            'informationSource' => $informationSource,
            'onlineStatus' => $onlineStatus,
            'adminNotes' => $adminNotes,
            'created' => $created,
            'createdBy' => $createdBy,
            'lastUpdt' => $lastUpdt,
            'lastUpdtBy' => $lastUpdtBy,
            'contactPerson' => $contactPerson,
            'descriptor1ID' => $descriptor1ID,
            'descriptor2ID' => $descriptor2ID,
            'descriptor3ID' => $descriptor3ID,
            'descriptor4ID' => $descriptor4ID,
            'url_finalReport' => $url_finalReport,
            'coordinatorEmail' => $coordinatorEmail,
            'eurOceanRIDProject' => $eurOceanRIDProject,
            'startYear' => $startYear,
            'endYear' => $endYear,
        ], 201);
    }

    // Send Info to infoHub
    public function infohub_store(Request $request)
    {
        $validate([
            'source_ID' => 'max:255',
            'RID' => 'max:255',
            'contractNumber' => 'max:255',
            'acronym' => 'max:255',
            'title' => 'max:255',
            'programmeID' => 'max:255',
            'startDate' => 'max:255',
            'endDate' => 'max:255',
            'projectFunding' => 'max:255',
            'summary' => 'max:9999',
            'webSite' => 'max:255',
            'informationSource' => 'max:255',
            'onlineStatus' => 'max:255',
            'adminNotes' => 'max:255',
            'created' => 'max:255',
            'createdBy' => 'max:255',
            'lastUpdt' => 'max:255',
            'lastUpdtBy' => 'max:255',
            'contactPerson' => 'max:255',
            'descriptor1ID' => 'max:255',
            'descriptor2ID' => 'max:255',
            'descriptor3ID' => 'max:255',
            'descriptor4ID' => 'max:255',
            'url_finalReport' => 'max:255',
            'coordinatorEmail' => 'max:255',
            'eurOceanRIDProject' => 'max:255',
            'startYear' => 'max:255',
            'endYear' => 'max:255',
        ]);

        $project = new Project([
            'source_ID' => $first_name,
            'RID' => $RID,
            'contractNumber' => $contractNumber,
            'acronym' => $acronym,
            'title' => $title,
            'programmeID' => $programmeID,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'projectFunding' => $projectFunding,
            'summary' => $summary,
            'webSite' => $webSite,
            'informationSource' => $informationSource,
            'onlineStatus' => $onlineStatus,
            'adminNotes' => $adminNotes,
            'created' => $created,
            'createdBy' => $createdBy,
            'lastUpdt' => $lastUpdt,
            'lastUpdtBy' => $lastUpdtBy,
            'contactPerson' => $contactPerson,
            'descriptor1ID' => $descriptor1ID,
            'descriptor2ID' => $descriptor2ID,
            'descriptor3ID' => $descriptor3ID,
            'descriptor4ID' => $descriptor4ID,
            'url_finalReport' => $url_finalReport,
            'coordinatorEmail' => $coordinatorEmail,
            'eurOceanRIDProject' => $eurOceanRIDProject,
            'startYear' => $startYear,
            'endYear' => $endYear,
        ]);

        $project->save();
        return response()->json($project, 201)->header('Content-Type', 'application/json');
    }

}
