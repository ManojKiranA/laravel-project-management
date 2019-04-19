@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.timeEntry.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.timeEntry.fields.work_type') }}
                    </th>
                    <td>
                        {{ $timeEntry->work_type->name ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.timeEntry.fields.project') }}
                    </th>
                    <td>
                        {{ $timeEntry->project->name ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.timeEntry.fields.start_time') }}
                    </th>
                    <td>
                        {{ $timeEntry->start_time }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.timeEntry.fields.end_time') }}
                    </th>
                    <td>
                        {{ $timeEntry->end_time }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection