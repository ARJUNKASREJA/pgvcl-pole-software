<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\SurveySheet;
use Illuminate\Database\Seeder;

class SurveySheetSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::first();

        if (!$project) {
            return;
        }

        for ($i = 1; $i <= 20; $i++) {

            SurveySheet::create([

                'project_id' => $project->id,

                'survey_no' => 'SUR-' . str_pad($i, 4, '0', STR_PAD_LEFT),

                'pole_no' => 'P-' . $i,

            ]);

        }
    }
}