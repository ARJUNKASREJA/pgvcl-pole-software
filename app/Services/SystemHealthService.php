<?php

namespace App\Services;

class SystemHealthService
{
    public function check(): array
    {
        return [

            'database' => true,

            'storage' => true,

            'cache' => true,

            'queue' => true,

        ];
    }
}