<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SurveyApiController;
use App\Http\Controllers\Api\PoleApiController;
use App\Http\Controllers\Api\GpsApiController;
use App\Http\Controllers\Api\CameraApiController;
use App\Http\Controllers\Api\DrawingApiController;

Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){

Route::apiResource('surveys',SurveyApiController::class);

Route::apiResource('poles',PoleApiController::class);

Route::apiResource('gps',GpsApiController::class);

Route::apiResource('camera',CameraApiController::class);

Route::apiResource('drawings',DrawingApiController::class);

});