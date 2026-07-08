<?php

namespace Database\Factories;

use App\Models\Pole;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pole>
 */
class PoleFactory extends Factory
{
    protected $model = Pole::class;

    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'pole_no' => Pole::generatePoleNumber(),
            'pole_type' => $this->faker->randomElement(['Concrete', 'Steel', 'Wood']),
            'pole_height' => $this->faker->randomElement(['8m', '9m', '10m']),
            'pole_material' => $this->faker->randomElement(['Concrete', 'Steel', 'Wood']),
            'pole_capacity' => $this->faker->randomElement(['Single', 'Double', 'Triple']),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'village' => $this->faker->city(),
            'feeder' => $this->faker->word(),
            'google_maps_link' => $this->faker->url(),
            'qr_code_ready' => true,
            'import_ready' => true,
            'export_ready' => true,
            'status' => true,
        ];
    }
}
