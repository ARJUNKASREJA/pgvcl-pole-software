<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SurveyResource extends JsonResource
{
    public function toArray($request)
    {
        return [

            'id'=>$this->id,

            'project'=>$this->project_id,

            'name'=>$this->survey_name,

            'date'=>$this->survey_date,

        ];
    }
}