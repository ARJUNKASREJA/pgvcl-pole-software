<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveySheetController;

Route::middleware('auth')

    ->group(function(){

        Route::resource(

            'survey-sheets',

            SurveySheetController::class

        );

    });