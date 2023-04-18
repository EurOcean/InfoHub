<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Institution;
use App\Models\RidInfrastructure; // Vessels

class XMLController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        return response()->view('sitemapsXML.index', [
            'project' => $projects,
        ])->header('Content-Type', 'text/xml');
    }

    public function projects()
    {
        // $project = Project::latest('id')->get();
        $project = Project::where('programmeID', [1, 4])->get();
        return response()->view('sitemapsXML.project', [
            'project' => $project,
        ])->header('Content-Type', 'text/xml');
    }

    public function organizations()
    {
        // $institution = Institution::latest('id')->get();
        $institution = Institution::get();
        return response()->view('sitemapsXML.organization', [
            'institution' => $institution,
        ])->header('Content-Type', 'text/xml');
    }

    public function vessels()
    {
        // $vessel = RidInfrastructure::where('ID_Category', ['SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'])->latest('id')->get();
        $vessel = RidInfrastructure::where('ID_Category', ['SCAT001001', 'SCAT001002', 'SCAT001003', 'SCAT001004'])->get();
        return response()->view('sitemapsXML.vessel', [
            'vessel' => $vessel,
        ])->header('Content-Type', 'text/xml');
    }
}
