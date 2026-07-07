<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SvgController;
use App\Http\Controllers\DwgController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ExportController;

Route::middleware('auth')

->group(function(){

Route::get(

'drawing/{drawing}/svg',

[SvgController::class,'generate']

)->name('drawing.svg');

Route::get(

'drawing/{drawing}/dwg',

[DwgController::class,'generate']

)->name('drawing.dwg');

Route::get(

'drawing/{drawing}/pdf',

[PdfController::class,'generate']

)->name('drawing.pdf');

Route::get(

'project/{project}/export',

[ExportController::class,'project']

)->name('project.export');

});