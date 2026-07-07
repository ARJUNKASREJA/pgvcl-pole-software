<?php

namespace App\Services;

class DrawingImportService
{
    public function import(
        array $data
    ): bool
    {
        return !empty($data);
    }
}