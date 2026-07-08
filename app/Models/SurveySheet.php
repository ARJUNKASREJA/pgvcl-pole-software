<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SurveySheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'survey_no',
        'pole_no',
        'consumer_name',
        'consumer_no',
        'mobile',
        'meter_no',
        'transformer',
        'latitude',
        'longitude',
        'remarks',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}