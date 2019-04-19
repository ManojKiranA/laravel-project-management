<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTimeWorkTypeRequest;
use App\Http\Requests\UpdateTimeWorkTypeRequest;
use App\TimeWorkType;

class TimeWorkTypeApiController extends Controller
{
    public function index()
    {
        $timeWorkTypes = TimeWorkType::all();

        return $timeWorkTypes;
    }

    public function store(StoreTimeWorkTypeRequest $request)
    {
        return TimeWorkType::create($request->all());
    }

    public function update(UpdateTimeWorkTypeRequest $request, TimeWorkType $timeWorkType)
    {
        return $timeWorkType->update($request->all());
    }

    public function show(TimeWorkType $timeWorkType)
    {
        return $timeWorkType;
    }

    public function destroy(TimeWorkType $timeWorkType)
    {
        return $timeWorkType->delete();
    }
}
