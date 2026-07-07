<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveySheet extends Model
{
    protected $fillable = [

        'project_id',

        'survey_no',

        'pole_no',

    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}