<?php

namespace App\Http\Controllers;
use App\Models\Rid;
use App\Http\Resources\RidResource;

use Illuminate\Http\Request;

class RidController extends Controller
{
    public function index()
    {
        return RidResource::collection(Rid::kg('name')->paginate(25));
    }

    public function show(Rid $rid)
    {
      return new RidResource($rid);
    }
}
