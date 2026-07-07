<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GpsController;

Route::middleware('auth')

->group(function(){

Route::resource(

'gps',

GpsController::class

);

});