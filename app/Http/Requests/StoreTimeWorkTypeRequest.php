<?php

namespace App\Http\Requests;

use App\TimeWorkType;
use Illuminate\Foundation\Http\FormRequest;

class StoreTimeWorkTypeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('time_work_type_create');
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
