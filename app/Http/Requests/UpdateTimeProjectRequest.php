<?php

namespace App\Http\Requests;

use App\TimeProject;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTimeProjectRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('time_project_edit');
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
