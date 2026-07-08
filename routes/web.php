<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SurveySheetController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('projects', ProjectController::class);

    Route::resource('survey-sheets', SurveySheetController::class);

});

require __DIR__.'/auth.php';

require __DIR__.'/poles.php';

require __DIR__.'/consumers.php';