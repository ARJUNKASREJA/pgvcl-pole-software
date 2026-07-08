<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [

        'project_code',
        'project_name',
        'division',
        'subdivision',
        'village',
        'feeder',
        'dtc',
        'description',
        'status',

    ];

    protected $casts = [

        'status' => 'boolean',

    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function surveySheets()
    {
        return $this->hasMany(SurveySheet::class);
    }

    public function poles()
    {
        return $this->hasMany(Pole::class);
    }

    public function consumers()
    {
        return $this->hasMany(Consumer::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    */

    public function getStatusTextAttribute()
    {
        return $this->status
            ? 'Active'
            : 'Inactive';
    }

    public function getStatusBadgeAttribute()
    {
        return $this->status
            ? 'success'
            : 'danger';
    }
}