<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'project_code',
        'division',
        'subdivision',
        'village',
        'feeder',
        'dtc',
        'description',
        'status',
        ];
        public function surveySheets()
{
    return $this->hasMany(SurveySheet::class);
}

}


