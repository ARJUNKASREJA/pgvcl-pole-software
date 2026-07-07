<?php

namespace Database\Factories;

use App\Models\Pole;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrawingFactory extends Factory
{
    public function definition(): array
    {
        return [

            'project_id'=>Project::factory(),

            'pole_id'=>Pole::factory(),

            'drawing_no'=>$this->faker->unique()->bothify('DWG#####'),

            'drawing_type'=>'LT Line',

            'svg_file'=>'drawings/demo.svg',

            'dwg_file'=>'drawings/demo.dwg',

            'pdf_file'=>'drawings/demo.pdf',

            'remarks'=>$this->faker->sentence(),

            'status'=>1,

        ];
    }
}