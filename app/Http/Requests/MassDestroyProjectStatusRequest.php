<?php

namespace App\Http\Requests;

use App\ProjectStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProjectStatusRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('project_status_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_statuses,id',
        ];
    }
}
