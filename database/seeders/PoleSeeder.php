<?php

namespace Database\Seeders;

use App\Models\Pole;
use App\Models\Project;
use Illuminate\Database\Seeder;

class PoleSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::first();

        if(!$project){

            return;

        }

        foreach(range(1,50) as $i){

            Pole::create([

                'project_id'=>$project->id,

                'pole_no'=>'PL-'.str_pad($i,4,'0',STR_PAD_LEFT),

                'pole_type'=>'PSC',

                'pole_height'=>'8',

                'latitude'=>23.0200+$i/10000,

                'longitude'=>72.5700+$i/10000,

                'status'=>1,

            ]);

        }

    }
}