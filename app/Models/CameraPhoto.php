<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CameraPhoto extends Model
{
    protected $fillable = [

        'project_id',

        'pole_id',

        'gps_location_id',

        'photo',

        'remarks',

        'captured_by',

    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function pole()
    {
        return $this->belongsTo(Pole::class);
    }

    public function gps()
    {
        return $this->belongsTo(
            GpsLocation::class,
            'gps_location_id'
        );
    }

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'captured_by'
        );
    }
}