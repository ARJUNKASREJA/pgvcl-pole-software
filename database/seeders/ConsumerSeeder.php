<?php

namespace Database\Seeders;

use App\Models\Pole;
use App\Models\Project;
use App\Models\Consumer;
use Illuminate\Database\Seeder;

class ConsumerSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::first();

        $pole = Pole::first();

        if(!$project){

            return;

        }

        foreach(range(1,100) as $i){

            Consumer::create([

                'project_id'=>$project->id,

                'pole_id'=>$pole?->id,

                'consumer_no'=>'CON'.str_pad($i,5,'0',STR_PAD_LEFT),

                'consumer_name'=>'Consumer '.$i,

                'meter_no'=>'MTR'.$i,

                'mobile'=>'999999'.str_pad($i,4,'0',STR_PAD_LEFT),

                'phase'=>'Single',

                'connection_type'=>'Domestic',

                'load'=>1,

                'status'=>1,

            ]);

        }

    }
}