<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Pole;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class CameraPhotoFactory extends Factory
{
    public function definition(): array
    {
        return [

            'project_id'=>Project::factory(),

            'pole_id'=>Pole::factory(),

            'photo'=>'camera/demo.jpg',

            'remarks'=>$this->faker->sentence(),

            'captured_by'=>User::factory(),

        ];
    }
}