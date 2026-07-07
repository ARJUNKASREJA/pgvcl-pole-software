<?php

namespace App\Exceptions;

use Throwable;

class ApiHandler
{
    public static function error(
        Throwable $e
    )
    {
        return response()->json([

            'success'=>false,

            'message'=>$e->getMessage(),

        ],500);
    }
}