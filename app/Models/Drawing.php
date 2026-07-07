<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drawing extends Model
{
    protected $fillable = [

        'project_id',

        'pole_id',

        'drawing_no',

        'drawing_type',

        'svg_file',

        'dwg_file',

        'pdf_file',

        'remarks',

        'status',

    ];

    protected $casts = [

        'status'=>'boolean',

    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function pole()
    {
        return $this->belongsTo(Pole::class);
    }
}