<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTimeProjectRequest;
use App\Http\Requests\UpdateTimeProjectRequest;
use App\TimeProject;

class TimeProjectApiController extends Controller
{
    public function index()
    {
        $timeProjects = TimeProject::all();

        return $timeProjects;
    }

    public function store(StoreTimeProjectRequest $request)
    {
        return TimeProject::create($request->all());
    }

    public function update(UpdateTimeProjectRequest $request, TimeProject $timeProject)
    {
        return $timeProject->update($request->all());
    }

    public function show(TimeProject $timeProject)
    {
        return $timeProject;
    }

    public function destroy(TimeProject $timeProject)
    {
        return $timeProject->delete();
    }
}
