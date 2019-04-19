<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTimeProjectRequest;
use App\Http\Requests\StoreTimeProjectRequest;
use App\Http\Requests\UpdateTimeProjectRequest;
use App\TimeProject;

class TimeProjectController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('time_project_access'), 403);

        $timeProjects = TimeProject::all();

        return view('admin.timeProjects.index', compact('timeProjects'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('time_project_create'), 403);

        return view('admin.timeProjects.create');
    }

    public function store(StoreTimeProjectRequest $request)
    {
        abort_unless(\Gate::allows('time_project_create'), 403);

        $timeProject = TimeProject::create($request->all());

        return redirect()->route('admin.time-projects.index');
    }

    public function edit(TimeProject $timeProject)
    {
        abort_unless(\Gate::allows('time_project_edit'), 403);

        return view('admin.timeProjects.edit', compact('timeProject'));
    }

    public function update(UpdateTimeProjectRequest $request, TimeProject $timeProject)
    {
        abort_unless(\Gate::allows('time_project_edit'), 403);

        $timeProject->update($request->all());

        return redirect()->route('admin.time-projects.index');
    }

    public function show(TimeProject $timeProject)
    {
        abort_unless(\Gate::allows('time_project_show'), 403);

        return view('admin.timeProjects.show', compact('timeProject'));
    }

    public function destroy(TimeProject $timeProject)
    {
        abort_unless(\Gate::allows('time_project_delete'), 403);

        $timeProject->delete();

        return back();
    }

    public function massDestroy(MassDestroyTimeProjectRequest $request)
    {
        TimeProject::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
