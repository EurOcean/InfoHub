<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('docs.pages.index');
    }

    public function schemaProject()
    {
        return view('docs.pages.project');
    }

    public function schemaVessels()
    {
        return view('docs.pages.vessel');
    }

    public function schemaOrganization()
    {
        return view('docs.pages.organization');
    }

    public function SchemaSitemap()
    {
        return view('docs.pages.sitemap');
    }

}
