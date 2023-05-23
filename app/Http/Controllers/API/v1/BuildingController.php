<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\BuildingResource;
use App\Models\Building;


class BuildingController extends Controller
{
    public function index()
    {
        return BuildingResource::collection(Building::all());
    }

    public function show(Building $building)
    {
        return BuildingResource::make($building);
    }
}