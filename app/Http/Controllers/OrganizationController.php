<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;
use App\Models\Institution as Institution;
use App\Models\RidKgMerge as RidKgMerge;
use App\Http\Resources\Organization as OrganizationResource;
use Spatie\SchemaOrg\Schema;

class OrganizationController extends Controller
{
    public function organizations_index()
    {
        $organizations = RidKgMerge::paginate(100);
        return OrganizationResource::collection($organizations)->collection;
    }

    public function show_organization($id)
    {
        $organization = RidKgMerge::where('id', $id)->first();
        
        $result = Schema::Organization()
                        ->picNumber($organization->picNumber)
                        ->vatNumber($organization->vatNumber)
                        ->name($organization->name)
                        ->shortName($organization->shortName)
                        ->activityType($organization->activityType)
                        ->street($organization->street)
                        ->city($organization->city)
                        ->postCode($organization->postCode)
                        ->country($organization->country)
                        ->geolocation($organization->geolocation)
                        ->organizationURL($organization->organizationURL);

        return new OrganizationResource($organization);
    }
}
