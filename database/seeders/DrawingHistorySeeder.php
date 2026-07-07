<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drawing;
use App\Models\User;
use App\Models\DrawingHistory;

class DrawingHistorySeeder extends Seeder
{
    public function run(): void
    {
        $drawing = Drawing::first();
        $user = User::first();

        if(!$drawing || !$user){
            return;
        }

        foreach(range(1,20) as $i){

            DrawingHistory::create([

                'drawing_id'=>$drawing->id,

                'user_id'=>$user->id,

                'action'=>'Generated',

                'remarks'=>'History '.$i,

            ]);

        }
    }
}