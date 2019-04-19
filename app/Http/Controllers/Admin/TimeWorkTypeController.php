<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTimeWorkTypeRequest;
use App\Http\Requests\StoreTimeWorkTypeRequest;
use App\Http\Requests\UpdateTimeWorkTypeRequest;
use App\TimeWorkType;

class TimeWorkTypeController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('time_work_type_access'), 403);

        $timeWorkTypes = TimeWorkType::all();

        return view('admin.timeWorkTypes.index', compact('timeWorkTypes'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('time_work_type_create'), 403);

        return view('admin.timeWorkTypes.create');
    }

    public function store(StoreTimeWorkTypeRequest $request)
    {
        abort_unless(\Gate::allows('time_work_type_create'), 403);

        $timeWorkType = TimeWorkType::create($request->all());

        return redirect()->route('admin.time-work-types.index');
    }

    public function edit(TimeWorkType $timeWorkType)
    {
        abort_unless(\Gate::allows('time_work_type_edit'), 403);

        return view('admin.timeWorkTypes.edit', compact('timeWorkType'));
    }

    public function update(UpdateTimeWorkTypeRequest $request, TimeWorkType $timeWorkType)
    {
        abort_unless(\Gate::allows('time_work_type_edit'), 403);

        $timeWorkType->update($request->all());

        return redirect()->route('admin.time-work-types.index');
    }

    public function show(TimeWorkType $timeWorkType)
    {
        abort_unless(\Gate::allows('time_work_type_show'), 403);

        return view('admin.timeWorkTypes.show', compact('timeWorkType'));
    }

    public function destroy(TimeWorkType $timeWorkType)
    {
        abort_unless(\Gate::allows('time_work_type_delete'), 403);

        $timeWorkType->delete();

        return back();
    }

    public function massDestroy(MassDestroyTimeWorkTypeRequest $request)
    {
        TimeWorkType::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
