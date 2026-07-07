<?php

namespace App\Services;

use App\Models\SurveySheet;

class ExcelExportService
{
    public static function headings(): array
    {
        return [

            'Survey No',

            'Project',

            'Consumer No',

            'Consumer Name',

            'Mobile',

            'Pole No',

            'Meter No',

            'Transformer',

            'Latitude',

            'Longitude',

            'Remarks',

            'Created At',

        ];
    }

    public static function rows()
    {
        return SurveySheet::with('project')
            ->orderBy('id')
            ->get()
            ->map(function ($row) {

                return [

                    $row->survey_no,

                    optional($row->project)->project_name,

                    $row->consumer_no,

                    $row->consumer_name,

                    $row->mobile,

                    $row->pole_no,

                    $row->meter_no,

                    $row->transformer,

                    $row->latitude,

                    $row->longitude,

                    $row->remarks,

                    optional($row->created_at)->format('d-m-Y H:i'),

                ];

            });
    }

    public static function filename(): string
    {
        return 'Survey_Report_' . now()->format('Ymd_His') . '.xlsx';
    }
}