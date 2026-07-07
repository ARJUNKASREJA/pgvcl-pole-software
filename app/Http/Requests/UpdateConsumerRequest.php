<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConsumerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'project_id' => 'required|exists:projects,id',

            'pole_id' => 'nullable|exists:poles,id',

            'consumer_no' => 'required|max:100',

            'consumer_name' => 'required|max:255',

            'meter_no' => 'nullable|max:100',

            'mobile' => 'nullable|max:20',

            'phase' => 'nullable|max:20',

            'connection_type' => 'nullable|max:100',

            'load' => 'nullable|numeric',

            'status' => 'required|boolean',

        ];
    }
}