<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/images',[ImagesController::class,'create']);

Route::post('/images',[ImagesController::class,"store"])->name('images');

Route::get("/images/{show}",[ImagesController::class,"show"])->name('images.show');
