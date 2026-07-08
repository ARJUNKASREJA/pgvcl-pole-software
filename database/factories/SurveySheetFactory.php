<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\SurveySheet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SurveySheet>
 */
class SurveySheetFactory extends Factory
{
    protected $model = SurveySheet::class;

    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'survey_no' => 'SRV-' . $this->faker->unique()->numberBetween(1000, 9999),
            'pole_no' => 'POLE-' . $this->faker->unique()->numberBetween(1000, 9999),
            'consumer_name' => $this->faker->name(),
            'consumer_no' => $this->faker->numerify('C####'),
            'mobile' => $this->faker->phoneNumber(),
            'meter_no' => $this->faker->bothify('M###'),
            'transformer' => $this->faker->bothify('T###'),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'remarks' => $this->faker->sentence(),
        ];
    }
}
