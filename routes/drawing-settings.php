<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrawingSettingController;

Route::middleware('auth')

->group(function(){

Route::get(

'drawing-settings',

[DrawingSettingController::class,'edit']

)->name('drawing-settings.edit');

Route::put(

'drawing-settings',

[DrawingSettingController::class,'update']

)->name('drawing-settings.update');

});