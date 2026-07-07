<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CameraController;

Route::middleware('auth')

->group(function(){

Route::resource(

'camera',

CameraController::class

);

});