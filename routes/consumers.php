<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumerController;

Route::middleware('auth')

->group(function(){

Route::resource(

'consumers',

ConsumerController::class

);

});