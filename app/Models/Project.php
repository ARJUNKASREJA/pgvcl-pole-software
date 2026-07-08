<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    public function getStatusTextAttribute(): string
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    public function getStatusBadgeAttribute(): string
    {
        return $this->status ? 'success' : 'danger';
    }

    public static function generateProjectCode(): string
    {
        $lastProject = self::withTrashed()->latest('id')->first();

        $nextNumber = $lastProject ? ((int) str_replace('PRJ-', '', $lastProject->project_code)) + 1 : 1;

        return 'PRJ-' . str_pad((string) $nextNumber, 6, '0', STR_PAD_LEFT);
    }
}