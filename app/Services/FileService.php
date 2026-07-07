<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class FileService
{
    public static function exists(
        string $path
    ): bool
    {
        return File::exists($path);
    }

    public static function size(
        string $path
    ): int
    {
        return File::size($path);
    }

    public static function delete(
        string $path
    ): bool
    {
        return File::delete($path);
    }

    public static function extension(
        string $path
    ): string
    {
        return File::extension($path);
    }
}