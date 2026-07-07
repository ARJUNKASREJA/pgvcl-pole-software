<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCameraRequest extends FormRequest
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

            'gps_location_id'=>'nullable|exists:gps_locations,id',

            'photo'=>'nullable|image|max:5120',

            'remarks'=>'nullable|max:1000',

            'captured_by'=>'required|exists:users,id',

        ];
    }
}