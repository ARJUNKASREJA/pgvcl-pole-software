<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoleController;

Route::middleware('auth')

->group(function(){

Route::resource(

'poles',

PoleController::class

);

});