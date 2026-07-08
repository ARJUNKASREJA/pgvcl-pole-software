<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'project_code' => Project::generateProjectCode(),
            'project_name' => $this->faker->company() . ' Project',
            'division' => $this->faker->word(),
            'subdivision' => $this->faker->word(),
            'village' => $this->faker->city(),
            'feeder' => $this->faker->word(),
            'dtc' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'status' => true,
        ];
    }
}
