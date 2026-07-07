<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinalSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([

            ProjectSeeder::class,

            SurveySeeder::class,

            PoleSeeder::class,

            GpsSeeder::class,

            CameraSeeder::class,

            DrawingSeeder::class,

        ]);
    }
}