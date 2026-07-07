<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [

            'project_name' => 'required|max:255',

            'project_code' => 'required|max:100',

            'division' => 'nullable|max:255',

            'subdivision' => 'nullable|max:255',

            'village' => 'nullable|max:255',

            'feeder' => 'nullable|max:255',

            'description' => 'nullable',

        ];
    }
}