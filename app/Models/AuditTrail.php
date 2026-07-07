<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    protected $fillable=[

        'table_name',

        'record_id',

        'action',

        'user_id',

        'old_data',

        'new_data',

    ];
}