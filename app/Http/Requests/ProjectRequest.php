<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'project_name' => ['required', 'string', 'max:255'],
            'division' => ['required', 'string', 'max:255'],
            'subdivision' => ['required', 'string', 'max:255'],
            'village' => ['required', 'string', 'max:255'],
            'feeder' => ['required', 'string', 'max:255'],
            'dtc' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'status' => ['nullable', 'boolean'],
        ];

        if ($this->isMethod('post')) {
            $rules['project_code'] = ['nullable', 'string', 'max:100', 'unique:projects,project_code'];
        }

        return $rules;
    }
}