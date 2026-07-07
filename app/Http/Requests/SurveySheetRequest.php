<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveySheetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'project_id' => 'required|exists:projects,id',

            'survey_no' => 'nullable|max:50',

            'consumer_name' => 'required|max:255',

            'consumer_no' => 'required|max:100',

            'mobile' => 'nullable|max:20',

            'pole_no' => 'nullable|max:100',

            'meter_no' => 'nullable|max:100',

            'transformer' => 'nullable|max:100',

            'latitude' => 'nullable|numeric|between:-90,90',

            'longitude' => 'nullable|numeric|between:-180,180',

            'remarks' => 'nullable|max:1000',

            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',

        ];
    }

    public function messages(): array
    {
        return [

            'project_id.required' => 'Please select project.',

            'project_id.exists' => 'Invalid project selected.',

            'consumer_name.required' => 'Consumer name is required.',

            'consumer_no.required' => 'Consumer number is required.',

            'latitude.numeric' => 'Latitude must be numeric.',

            'longitude.numeric' => 'Longitude must be numeric.',

            'photo.image' => 'Only image files are allowed.',

            'photo.max' => 'Maximum photo size is 5 MB.',

        ];
    }

    public function attributes(): array
    {
        return [

            'consumer_no' => 'Consumer Number',

            'consumer_name' => 'Consumer Name',

            'pole_no' => 'Pole Number',

            'meter_no' => 'Meter Number',

        ];
    }
}