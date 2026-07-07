<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pole;
use App\Models\Project;
use App\Models\GpsLocation;
use Illuminate\Database\Seeder;

class GpsSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::first();
        $pole = Pole::first();
        $user = User::first();

        if (!$project || !$pole || !$user) {
            return;
        }

        foreach (range(1, 50) as $i) {

            GpsLocation::create([

                'project_id' => $project->id,

                'pole_id' => $pole->id,

                'latitude' => 23.020000 + ($i / 10000),

                'longitude' => 72.570000 + ($i / 10000),

                'accuracy' => rand(1,5),

                'captured_by' => $user->id,

            ]);

        }
    }
}