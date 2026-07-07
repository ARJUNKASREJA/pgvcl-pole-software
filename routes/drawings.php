<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrawingController;

Route::middleware('auth')

->group(function(){

Route::resource(

'drawings',

DrawingController::class

);

});