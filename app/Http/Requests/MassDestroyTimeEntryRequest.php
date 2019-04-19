<?php

namespace App\Http\Requests;

use App\TimeEntry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyTimeEntryRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('time_entry_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:time_entries,id',
        ];
    }
}
