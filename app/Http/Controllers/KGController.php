<?php

namespace App\Http\Controllers;
use App\Models\KG;
use App\Http\Resources\KGResource;

use Illuminate\Http\Request;

class KGController extends Controller
{
    public function index()
    {
        return KGResource::collection(KG::kg('name')->paginate(25));
    }

    public function show(KG $kg)
    {
        return new KGResource($kg);
    }
}
