<?php

namespace App\Services;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfService
{
    public static function download(
        string $view,
        array $data,
        string $filename
    ) {
        return Pdf::loadView($view, $data)
            ->setPaper('a4', 'portrait')
            ->download($filename);
    }

    public static function stream(
        string $view,
        array $data
    ) {
        return Pdf::loadView($view, $data)
            ->stream();
    }
}