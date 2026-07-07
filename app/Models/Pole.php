<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pole extends Model
{
    protected $fillable=[

        'project_id',

        'pole_no',

        'pole_type',

        'pole_height',

        'latitude',

        'longitude',

        'status',

    ];

    protected $casts=[

        'status'=>'boolean',

    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}