<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'project_id' => 'required|exists:projects,id',

            'pole_no' => 'required|max:100',

            'pole_type' => 'nullable|max:100',

            'pole_height' => 'nullable|max:50',

            'latitude' => 'nullable',

            'longitude' => 'nullable',

        ];
    }
}