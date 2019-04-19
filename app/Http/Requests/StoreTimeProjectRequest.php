<?php

namespace App\Http\Requests;

use App\TimeProject;
use Illuminate\Foundation\Http\FormRequest;

class StoreTimeProjectRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('time_project_create');
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
