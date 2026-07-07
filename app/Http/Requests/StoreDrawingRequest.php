<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDrawingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'project_id'=>'required|exists:projects,id',

            'pole_id'=>'required|exists:poles,id',

            'drawing_no'=>'required|unique:drawings',

            'drawing_type'=>'required|max:100',

            'remarks'=>'nullable|max:1000',

            'status'=>'required|boolean',

        ];
    }
}