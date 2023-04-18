<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Project;
use App\Models\PicNumber;
use App\Models\Institution;
use App\Models\RidKgMerge;
use App\Models\RVModule;
use App\Models\RidInfrastructure; // Vessels
use App\Models\ProjectInstitution;
use App\Models\RidRelInfrastructureInstitution;
use App\Models\RidInstitutions;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class SitemapController extends Controller
{

    // VIEWS SITEMAPS
    // PROJECT
    public function projectsList()
    {
        $projects = Project::whereIn('programmeID', [1, 4])->paginate(50);
        return View::make('sitemapViews.projectsList', compact(['projects']));
    }

    public function projectDetail($id)
    {

        $project = ProjectInstitution::join('projects', 'project_institutions.projectID', '=', 'projects.id')
        ->join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')
        ->whereIn('programmeID', [1, 4])
        ->where('project_institutions.projectID', $id)
        ->first();

        $rel_project_institutions = Project::join('project_institutions', 'projects.id', '=', 'project_institutions.partnershipID')
        ->join('partnerships', 'project_institutions.partnershipID', '=', 'partnerships.id')
        ->find($id);

        $programmerID = Project::join('programmers', 'projects.programmeID', '=', 'programmers.id')->find($id);

        $inst_name = ProjectInstitution::join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')->first();

        $organizationsSearch = Project::join('institutions', 'institutions.id', '=', 'projects.id')->get();
        $organizationTitle = Project::join('institutions', 'institutions.id', '=', 'projects.id')->find($id);


        $coordinators = ProjectInstitution::join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')
        ->join('rid_kg_merges', 'project_institutions.institutionID', '=', 'rid_kg_merges.id_kg')
        ->join('projects', 'project_institutions.projectID', '=', 'projects.id')
        ->join('countries', 'institutions.countryID', '=', 'countries.id')
        ->join('partnerships', 'project_institutions.partnershipID', '=', 'partnerships.id')
        ->where('project_institutions.partnershipID', 1)
        ->where('project_institutions.projectID', $id)
        ->select('*', 'partnerships.name AS partnership_name', 'institutions.name AS institution_name', 'rid_kg_merges.id AS id_relation')
        ->get();

        // $partners = ProjectInstitution::join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')
        // ->join('projects', 'project_institutions.projectID', '=', 'projects.id')
        // ->join('countries', 'institutions.countryID', '=', 'countries.id')
        // ->join('partnerships', 'project_institutions.partnershipID', '=', 'partnerships.id')
        // ->where('project_institutions.partnershipID', 2)
        // ->select('*', 'partnerships.name AS partnership_name', 'institutions.name AS institution_name')
        // ->where('project_institutions.projectID', $id)
        // ->get();
   
        $partners = ProjectInstitution::join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')
        ->join('rid_kg_merges', 'project_institutions.institutionID', '=', 'rid_kg_merges.id_kg')
        ->join('projects', 'project_institutions.projectID', '=', 'projects.id')
        ->join('countries', 'institutions.countryID', '=', 'countries.id')
        ->join('partnerships', 'project_institutions.partnershipID', '=', 'partnerships.id')
        ->where('project_institutions.partnershipID', 2)
        ->select('*', 'partnerships.name AS partnership_name', 'institutions.name AS institution_name', 'rid_kg_merges.id AS id_relation')
        ->where('project_institutions.projectID', $id)
        ->get();

        return View::make('sitemapViews.projectID', compact(['project', 'organizationsSearch', 'organizationTitle', 'rel_project_institutions', 'inst_name', 'programmerID', 'partners', 'coordinators' ]));
    }

    // EDIT ORGANIZATIONS - PROJECT
    public function projectOrganizationUpdate(Request $request, $id)
    {
        $project = Project::join('institutions', 'projects.id', '=', 'projects.id')
                            ->join('programmers', 'projects.programmeID', '=', 'programmers.programmeTypeID')
                            ->whereIn('programmeID', [1, 4])
                            ->findOrFail($id);

        $rel_project_institutions = Project::join('project_institutions', 'projects.id', '=', 'project_institutions.partnershipID')
                                            ->join('partnerships', 'project_institutions.partnershipID', '=', 'partnerships.id')
                                            ->find($id);

        $inst_name = ProjectInstitution::join('institutions', 'project_institutions.institutionID', '=', 'institutions.id')->find($id);
        $organizationsSearch = Project::join('institutions', 'institutions.id', '=', 'projects.id')->orderBy('name')->get();


        $organization_id = ProjectInstitution::join('projects', 'project_institutions.partnershipID', '=', 'projects.id')->find($id);
        $organization_id->institutionID = $request->input('organization_id');
        $organization_id->save();

        return redirect()->back()->with('status', 'Successfully updated');
    }

    // SEARCH AUTOCOMPLETE PROJECTS
    public function searchProjects(Request $request)
    {
        if ($request->ajax()) {
            $data = Project::whereIn('programmeID', [1, 4])->where('acronym', 'LIKE', $request->acronym. '%')
                            ->orWhere('contractNumber', 'LIKE', $request->acronym. '%')->get();
            $output = '';
            if (count($data) > 0) {
                $output = '<div class="block relative px-4 py-2 z-40">
                               <div class="flex items-center justify-between px-8 py-2">
                                    <p class="text-gray-600 text-xs">Acronym Name</p>
                                    <p class="text-gray-600 text-xs">Contract Number</p>
                               </div>
                            <ul>';
                foreach ($data as $row) {
                    $output .= '<li class="hover:bg-gray-50 border-b">'.
                                    '<a href="project/'.$row->id.'">'.
                                        '<div class="flex items-center justify-between px-8 py-2">'
                                            .'<p class="text-primary-blue text-sm font-bold hover:text-blue-900">'.$row->acronym.'</p>'
                                            .'<p class="text-xs">'.$row->contractNumber.'</p>'
                                        .'</div>'
                                    .'</a>'
                                .'</li>';
                }
                $output .= '</ul></div>';
            }else {
                $output .= '<li class="m-2 py-8 bg-gray-50 rounded list-none text-center font-bold text-gray-700 mb-0">'.'No Data Found'.'</li>';
            }
            return $output;
        }
        return response()->json($filterResult);
    }

    // VESSELS
    public function vesselsList()
    {
        $vessels = RidInfrastructure::whereIn('rid_infrastructures.id_category', ['SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'])
        ->where('rid_infrastructures.id_status_act', 'STATI001')
        ->where('id_country', '!=', 'RU')
        ->paginate(50);

        return View::make('sitemapViews.vesselsList', compact(['vessels']));
    }

    // SEARCH AUTOCOMPLETE VESSELS
    public function searchVessels(Request $request)
    {
        if ($request->ajax()) {
            $data = RidRelInfrastructureInstitution::join('rid_infrastructures', 'rid_rel_infrastructure_institutions.id_infrastructure', '=', 'rid_infrastructures.id_infrastructure')
            ->join('rid_categories', 'rid_infrastructures.id_category', '=', 'rid_categories.id_category')
            ->whereIn('rid_infrastructures.id_category', ['SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'])
            ->where('name_infrastructure', 'LIKE', $request->name_infrastructure. '%')
            ->orderBy('name_infrastructure', 'ASC')
            ->get()
            ->unique('name_infrastructure');

            $output = '';
            if (count($data) > 0) {
                $output = '<div class="block relative px-4 py-2 z-40">
                            <div class="flex items-center justify-between px-8 py-2">
                                <p class="text-gray-600 text-xs">Infrastructure Name</p>
                                <p class="text-gray-600 text-xs">Location</p>
                            </div>
                            <ul>';
                foreach ($data as $row) {
                    $output .= '<li class="hover:bg-gray-50 border-b">'.
                                    '<a href="vessel/' . $row->id_infrastructure . '">'.
                                        '<div class="flex items-center justify-between px-8 py-2">'
                                            .'<p class="text-primary-blue text-sm font-bold hover:text-blue-900">'.$row->name_infrastructure.'</p>'
                                            .'<p class="text-xs">'.$row->id_country.'</p>'
                                        .'</div>'
                                    .'</a>'
                                .'</li>';
                }
                $output .= '</ul></div>';
            }else {
                $output .= '<li class="m-2 py-8 bg-gray-50 rounded list-none text-center font-bold text-gray-700 mb-0">'.'No Data Found'.'</li>';
            }
            return $output;
        }
        return response()->json($filterResult);
    }

    public function vesselDetail($id_infrastructure)
    {

        $vessel = RidRelInfrastructureInstitution::join('rid_infrastructures', 'rid_rel_infrastructure_institutions.id_infrastructure', '=', 'rid_infrastructures.id_infrastructure')
        ->join('rid_institutions', 'rid_rel_infrastructure_institutions.id_institution', '=', 'rid_institutions.id_institution')
        ->join('countries', 'rid_institutions.id_country', '=', 'countries.code')
        ->join('rid_categories', 'rid_infrastructures.id_category', '=', 'rid_categories.id_category')
        ->whereIn('rid_infrastructures.id_category', ['SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'])
        ->where('rid_infrastructures.id_infrastructure', $id_infrastructure)
        ->findOrFail($id_infrastructure);

        $owners = RidRelInfrastructureInstitution::join('rid_infrastructures', 'rid_rel_infrastructure_institutions.id_infrastructure', '=', 'rid_infrastructures.id_infrastructure')
        ->join('rid_institutions', 'rid_rel_infrastructure_institutions.id_institution', '=', 'rid_institutions.id_institution')
        ->join('countries', 'rid_institutions.id_country', '=', 'countries.code')
        ->where('rid_rel_infrastructure_institutions.status', 'Owner')
        ->where('rid_rel_infrastructure_institutions.id_infrastructure', $id_infrastructure)
        ->get();


        $operators = RidRelInfrastructureInstitution::join('rid_infrastructures', 'rid_rel_infrastructure_institutions.id_infrastructure', '=', 'rid_infrastructures.id_infrastructure')
        ->join('rid_institutions', 'rid_rel_infrastructure_institutions.id_institution', '=', 'rid_institutions.id_institution')
        ->join('countries', 'rid_institutions.id_country', '=', 'countries.code')
        ->where('rid_rel_infrastructure_institutions.status', 'Operator')
        ->where('rid_rel_infrastructure_institutions.id_infrastructure', $id_infrastructure)
        ->get();


        return View::make('sitemapViews.vesselID', compact(['vessel', 'owners', 'operators']));
    }

    public function vesselDetailUpdate(Request $request, $id)
    {
        $vessel = RidInfrastructure::whereIn('ID_Category', array('SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'))->findOrFail($id);

        $organizationsSearch = RidInfrastructure::whereIn('ID_Category', array('SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'))
                                                ->join('rid_institutions', 'rid_institutions.id', '=', 'rid_infrastructures.id')
                                                ->get();

        $organizationTitle = RidInfrastructure::whereIn('ID_Category', array('SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'))
                                                ->join('rid_institutions', 'rid_institutions.id', '=', 'rid_infrastructures.id')
                                                ->find($id);

        $country = RidInfrastructure::join('countries', 'countries.code', '=', 'rid_infrastructures.id_country')->find($id);

        $owner_operator = RidInfrastructure::whereIn('ID_Category', array('SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'))
                                            ->join('rid_rel_infrastructure_institutions', 'rid_infrastructures.id_infrastructure', '=', 'rid_rel_infrastructure_institutions.id_infrastructure')
                                            ->find($id);

        $institution = RidRelInfrastructureInstitution::join('rid_infrastructures', 'rid_rel_infrastructure_institutions.id', '=', 'rid_infrastructures.id',)
                                                        ->join('rid_institutions', 'rid_rel_infrastructure_institutions.id', '=', 'rid_institutions.id',)
                                                        ->find($id);

        $institution->id_institution = $request->input('organization_id');
        $institution->save();

        return redirect()->back()->with('status', 'Successfully updated');
    }

    public function update_vessel(Request $request, $id)
    {
        $vessel = RidInfrastructure::whereIn('ID_Category', ['SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'])->findOrFail($id);
        $vessel->id = $request->input('id');
        $vessel->update();
        return redirect()->back()->with('status','Organization Vessel Updated Successfully');
    }

    // ORGANIZATION
    public function organizationsList()
    {
        $empty_picNumbers = RidKgMerge::where('picNumber', '=', '')->orWhereNull('picNumber')->orderBy('name', 'ASC')->get();
        $filled_picNumbers = RidKgMerge::whereRaw('picNumber <> ""')->orderBy('name', 'ASC')->get();
        $organizationsWithAndWithOutPicNumber = $empty_picNumbers->merge($filled_picNumbers);
        $organizations = $organizationsWithAndWithOutPicNumber->unique('picNumber')->paginate(50);

        return View::make('sitemapViews.organizationsList', compact(['organizations']));
    }

    // SEARCH AUTOCOMPLETE ORGANIZATIONS
    public function searchOrganizations(Request $request)
    {
        if ($request->ajax()) {
            $picNumber = RidKgMerge::pluck('picNumber')->all();
            $data = RidKgMerge::join('countries', 'rid_kg_merges.country', '=', 'countries.code')
                ->where('picNumber', '!=', $picNumber)
                ->orderBy('name', 'ASC')
                ->where('name', 'LIKE', $request->acronym. '%')
                ->get();

            // $data = DB::table('countries')->join('rid_kg_merges', 'countries.code', '=', 'rid_kg_merges.country')->where('picNumber', '!=', $picNumber)->orderBy('name', 'ASC')->where('name', 'LIKE', $request->acronym. '%')->get();
            $output = '';
            if (count($data) > 0) {
                $output = '
                    <div class="block relative px-4 py-2 z-40 text-gray-600">
                        <div class="flex items-center justify-between px-8 py-2">
                            <p class="text-gray-600 text-xs">Name</p>
                        </div>
                    <ul>
                ';
                foreach ($data as $row) {
                    $output .= '
                        <li class="hover:bg-gray-50 border-b text-gray-600">'.
                            '<a href="organization/'.$row->id.'">'.
                                '<div class="flex items-center justify-between px-8 py-2">'
                                    .'<p class="text-primary-blue text-xs capitalize font-bold hover:text-blue-900">'. $row->name .'</p>'
                                .'</div>'
                            .'</a>'
                        .'</li>
                    ';
                }
                $output .= '</ul></div>';
            }else {
                $output .= '<li class="m-2 py-8 bg-gray-50 rounded list-none text-center font-bold text-gray-500 mb-0">'.'No Data Found'.'</li>';
            }
            return $output;
        }
        return response()->json($filterResult);
    }

    public function organizationDetail($id)
    {
        $organization = RidKgMerge::find($id);
        $country = RidKgMerge::join('countries', 'rid_kg_merges.country', '=', 'countries.code')->find($id);
        // dd($country);
        return View::make('sitemapViews.organizationID', compact(['organization', 'country']));
    }

    public function paginate($items, $perPage = 50, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $options['path'] = $options['path'] ?? request()->path();
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
