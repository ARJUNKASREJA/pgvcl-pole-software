<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSurveySheetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'project_id' => 'required|exists:projects,id',

            'survey_no' => 'required|max:100',

            'pole_no' => 'required|max:100',

        ];
    }
}