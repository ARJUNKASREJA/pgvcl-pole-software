<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrawingSetting extends Model
{
    protected $fillable = [

        'company_name',

        'company_address',

        'default_scale',

        'paper_size',

        'title_block',

        'north_symbol',

        'auto_numbering',

        'default_format',

    ];

    protected $casts=[

        'auto_numbering'=>'boolean',

    ];
}