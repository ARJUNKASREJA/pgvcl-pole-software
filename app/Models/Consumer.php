<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'pole_id',
        'consumer_no',
        'consumer_name',
        'meter_no',
        'mobile',
        'phase',
        'connection_type',
        'load',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'load' => 'decimal:2',
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