<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pole extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'survey_sheet_id',
        'consumer_id',
        'pole_no',
        'pole_type',
        'pole_height',
        'pole_material',
        'pole_capacity',
        'latitude',
        'longitude',
        'transformer_id',
        'village',
        'feeder',
        'google_maps_link',
        'qr_code_ready',
        'import_ready',
        'export_ready',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'qr_code_ready' => 'boolean',
        'import_ready' => 'boolean',
        'export_ready' => 'boolean',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function surveySheet()
    {
        return $this->belongsTo(SurveySheet::class);
    }

    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }

    public function transformer()
    {
        return $this->belongsTo(Transformer::class);
    }

    public static function generatePoleNumber(): string
    {
        $lastPole = self::withTrashed()->latest('id')->first();
        $nextNumber = $lastPole ? ((int) str_replace('PL-', '', $lastPole->pole_no)) + 1 : 1;

        return 'PL-' . str_pad((string) $nextNumber, 6, '0', STR_PAD_LEFT);
    }
}