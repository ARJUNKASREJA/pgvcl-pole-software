<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSurveySheetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'project_id' => ['required', 'exists:projects,id'],
            'survey_no' => ['nullable', 'string', 'max:100', 'unique:survey_sheets,survey_no'],
            'pole_no' => ['nullable', 'string', 'max:100'],
            'consumer_name' => ['nullable', 'string', 'max:255'],
            'consumer_no' => ['nullable', 'string', 'max:100'],
            'mobile' => ['nullable', 'string', 'max:20'],
            'meter_no' => ['nullable', 'string', 'max:100'],
            'transformer' => ['nullable', 'string', 'max:100'],
            'latitude' => ['nullable', 'numeric'],
            'longitude' => ['nullable', 'numeric'],
            'remarks' => ['nullable', 'string'],
        ];
    }
}