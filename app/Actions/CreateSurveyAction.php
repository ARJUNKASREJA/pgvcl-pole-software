<?php

namespace App\Actions;

use App\Models\SurveySheet;
use App\Services\AutoNumberService;
use App\Services\GpsService;

class CreateSurveyAction
{
    public function execute(array $data): SurveySheet
    {
        if (empty($data['survey_no'])) {
            $data['survey_no'] = AutoNumberService::surveyNo();
        }

        if (
            !empty($data['latitude']) &&
            !empty($data['longitude'])
        ) {
            if (GpsService::validate($data['latitude'], $data['longitude'])) {

                $gps = GpsService::format(
                    $data['latitude'],
                    $data['longitude']
                );

                $data['latitude'] = $gps['latitude'];
                $data['longitude'] = $gps['longitude'];
            }
        }

        return SurveySheet::create([
            'project_id'      => $data['project_id'],
            'survey_no'       => $data['survey_no'],
            'consumer_no'     => $data['consumer_no'],
            'consumer_name'   => $data['consumer_name'],
            'mobile'          => $data['mobile'] ?? null,
            'pole_no'         => $data['pole_no'] ?? null,
            'meter_no'        => $data['meter_no'] ?? null,
            'transformer'     => $data['transformer'] ?? null,
            'latitude'        => $data['latitude'] ?? null,
            'longitude'       => $data['longitude'] ?? null,
            'remarks'         => $data['remarks'] ?? null,
        ]);
    }
}