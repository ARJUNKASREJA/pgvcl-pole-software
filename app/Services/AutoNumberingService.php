<?php

namespace App\Services;

use App\Models\Pole;

class AutoNumberingService
{
    public function generate()
    {
        $count=1;

        foreach(

            Pole::orderBy('id')->get()

            as $pole

        ){

            $pole->update([

                'pole_no'=>'P-'.

                str_pad(

                    $count++,

                    5,

                    '0',

                    STR_PAD_LEFT

                )

            ]);

        }

        return true;
    }
}