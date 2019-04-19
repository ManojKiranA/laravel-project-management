<?php

namespace App\Http\Requests;

use App\TimeProject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyTimeProjectRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('time_project_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:time_projects,id',
        ];
    }
}
