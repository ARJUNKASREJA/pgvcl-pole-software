<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrawingHistory extends Model
{
    protected $fillable = [

        'drawing_id',

        'action',

        'user_id',

        'remarks',

    ];

    public function drawing()
    {
        return $this->belongsTo(Drawing::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}