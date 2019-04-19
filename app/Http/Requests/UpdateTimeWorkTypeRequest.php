<?php

namespace App\Http\Requests;

use App\TimeWorkType;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTimeWorkTypeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('time_work_type_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
