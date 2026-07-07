<?php

namespace App\Actions;

use App\Models\SurveySheet;
use App\Services\GpsService;

class UpdateSurveyAction
{
    public function execute(SurveySheet $survey, array $data): SurveySheet
    {
        if (
            !empty($data['latitude']) &&
            !empty($data['longitude']) &&
            GpsService::validate($data['latitude'], $data['longitude'])
        ) {
            $gps = GpsService::format(
                $data['latitude'],
                $data['longitude']
            );

            $data['latitude'] = $gps['latitude'];
            $data['longitude'] = $gps['longitude'];
        }

        $survey->update([
            'project_id'      => $data['project_id'],
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

        return $survey->fresh();
    }
}