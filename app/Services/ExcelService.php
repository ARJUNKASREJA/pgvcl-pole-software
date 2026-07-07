<?php

namespace App\Services;

use Maatwebsite\Excel\Facades\Excel;

class ExcelService
{
    public static function export(
        $export,
        string $filename
    )
    {
        return Excel::download(
            $export,
            $filename
        );
    }

    public static function import(
        $import,
        $file
    )
    {
        Excel::import(
            $import,
            $file
        );
    }
}