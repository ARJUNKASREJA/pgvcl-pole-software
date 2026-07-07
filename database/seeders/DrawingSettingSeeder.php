<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DrawingSetting;

class DrawingSettingSeeder extends Seeder
{
    public function run(): void
    {
        DrawingSetting::create([

            'company_name'=>'PGVCL',

            'company_address'=>'Gujarat',

            'default_scale'=>'1:100',

            'paper_size'=>'A3',

            'title_block'=>'Default',

            'north_symbol'=>'North',

            'auto_numbering'=>true,

            'default_format'=>'SVG',

        ]);
    }
}