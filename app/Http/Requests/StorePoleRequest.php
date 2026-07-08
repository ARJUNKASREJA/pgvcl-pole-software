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
            'project_id' => ['required', 'exists:projects,id'],
            'survey_sheet_id' => ['nullable', 'exists:survey_sheets,id'],
            'consumer_id' => ['nullable', 'exists:consumers,id'],
            'pole_no' => ['nullable', 'string', 'max:100', 'unique:poles,pole_no'],
            'pole_type' => ['nullable', 'string', 'max:100'],
            'pole_height' => ['nullable', 'string', 'max:50'],
            'pole_material' => ['nullable', 'string', 'max:100'],
            'pole_capacity' => ['nullable', 'string', 'max:100'],
            'latitude' => ['nullable', 'numeric'],
            'longitude' => ['nullable', 'numeric'],
            'transformer_id' => ['nullable', 'exists:transformers,id'],
            'village' => ['nullable', 'string', 'max:255'],
            'feeder' => ['nullable', 'string', 'max:255'],
            'google_maps_link' => ['nullable', 'url'],
            'qr_code_ready' => ['nullable', 'boolean'],
            'import_ready' => ['nullable', 'boolean'],
            'export_ready' => ['nullable', 'boolean'],
            'status' => ['nullable', 'boolean'],
        ];
    }
}