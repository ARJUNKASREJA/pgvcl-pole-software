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
            'project_id' => ['required', 'exists:projects,id'],
            'pole_id' => ['nullable', 'exists:poles,id'],
            'consumer_no' => ['required', 'string', 'max:100', 'unique:consumers,consumer_no,' . $this->route('consumer')?->id],
            'consumer_name' => ['required', 'string', 'max:255'],
            'meter_no' => ['nullable', 'string', 'max:100'],
            'mobile' => ['nullable', 'string', 'max:20'],
            'phase' => ['nullable', 'string', 'max:20'],
            'connection_type' => ['nullable', 'string', 'max:100'],
            'load' => ['nullable', 'numeric'],
            'status' => ['nullable', 'boolean'],
        ];
    }
}