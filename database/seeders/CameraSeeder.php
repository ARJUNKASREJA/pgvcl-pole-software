<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pole;
use App\Models\Project;
use App\Models\CameraPhoto;
use Illuminate\Database\Seeder;

class CameraSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::first();
        $pole = Pole::first();
        $user = User::first();

        if(!$project || !$pole || !$user){
            return;
        }

        foreach(range(1,20) as $i){

            CameraPhoto::create([

                'project_id'=>$project->id,

                'pole_id'=>$pole->id,

                'photo'=>'camera/demo.jpg',

                'remarks'=>'Demo Photo '.$i,

                'captured_by'=>$user->id,

            ]);

        }
    }
}