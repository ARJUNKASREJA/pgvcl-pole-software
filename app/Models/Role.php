<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [

        'name',

        'description',

        'status',

    ];

    protected $casts=[

        'status'=>'boolean',

    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}