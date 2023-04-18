<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;
use App\Models\RidInfrastructure as RidInfrastructure;
use App\Models\RidRelInfrastructureInstitution as RidRelInfrastructureInstitution;
use App\Models\RidInstitutions as RidInstitutions;
use App\Models\RVModule as RVModule;
use App\Http\Resources\Vessel as VesselResource;
use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\DB;

class VesselsController extends Controller
{
    public function vessels_index()
    {
        $vessels = RidInfrastructure::paginate(100);
        return VesselResource::collection($vessels)->collection;
    }

    public function show_vessel($id_infrastructure)
    {
        $vessel = RidRelInfrastructureInstitution::join('rid_infrastructures', 'rid_rel_infrastructure_institutions.id_infrastructure', '=', 'rid_infrastructures.id_infrastructure')
        ->join('rid_institutions', 'rid_rel_infrastructure_institutions.id_institution', '=', 'rid_institutions.id_institution')
        ->join('countries', 'rid_institutions.id_country', '=', 'countries.code')
        ->join('rid_categories', 'rid_infrastructures.id_category', '=', 'rid_categories.id_category')
        ->whereIn('rid_infrastructures.id_category', ['SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'])
        ->where('rid_infrastructures.id_infrastructure', $id_infrastructure)
        ->findOrFail($id_infrastructure);

        return new VesselResource($vessel);
    }

}
