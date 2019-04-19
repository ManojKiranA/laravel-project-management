<?php

namespace App\Http\Requests;

use App\TimeWorkType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyTimeWorkTypeRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('time_work_type_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:time_work_types,id',
        ];
    }
}
