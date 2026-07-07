<?php

namespace Database\Seeders;

use App\Models\Pole;
use App\Models\Project;
use App\Models\Drawing;
use Illuminate\Database\Seeder;

class DrawingSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::first();
        $pole = Pole::first();

        if(!$project || !$pole){
            return;
        }

        foreach(range(1,50) as $i){

            Drawing::create([

                'project_id'=>$project->id,

                'pole_id'=>$pole->id,

                'drawing_no'=>'DWG'.str_pad($i,5,'0',STR_PAD_LEFT),

                'drawing_type'=>'LT Line',

                'svg_file'=>'drawings/demo.svg',

                'dwg_file'=>'drawings/demo.dwg',

                'pdf_file'=>'drawings/demo.pdf',

                'remarks'=>'Demo Drawing',

                'status'=>1,

            ]);

        }
    }
}