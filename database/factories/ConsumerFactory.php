<?php

namespace Database\Factories;

use App\Models\Pole;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsumerFactory extends Factory
{
    public function definition(): array
    {
        return [

            'project_id'=>Project::inRandomOrder()->first()?->id,

            'pole_id'=>Pole::inRandomOrder()->first()?->id,

            'consumer_no'=>$this->faker->unique()->numerify('CON#####'),

            'consumer_name'=>$this->faker->name(),

            'meter_no'=>$this->faker->numerify('MTR#####'),

            'mobile'=>$this->faker->phoneNumber(),

            'phase'=>'Single',

            'connection_type'=>'Domestic',

            'load'=>1,

            'status'=>1,

        ];
    }
}