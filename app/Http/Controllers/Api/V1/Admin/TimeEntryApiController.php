<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTimeEntryRequest;
use App\Http\Requests\UpdateTimeEntryRequest;
use App\TimeEntry;

class TimeEntryApiController extends Controller
{
    public function index()
    {
        $timeEntries = TimeEntry::all();

        return $timeEntries;
    }

    public function store(StoreTimeEntryRequest $request)
    {
        return TimeEntry::create($request->all());
    }

    public function update(UpdateTimeEntryRequest $request, TimeEntry $timeEntry)
    {
        return $timeEntry->update($request->all());
    }

    public function show(TimeEntry $timeEntry)
    {
        return $timeEntry;
    }

    public function destroy(TimeEntry $timeEntry)
    {
        return $timeEntry->delete();
    }
}
