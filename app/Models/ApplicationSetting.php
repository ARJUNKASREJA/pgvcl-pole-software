<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationSetting extends Model
{
    protected $fillable = [

        'company_name',

        'company_address',

        'company_email',

        'company_phone',

        'timezone',

        'currency',

        'language',

    ];
}