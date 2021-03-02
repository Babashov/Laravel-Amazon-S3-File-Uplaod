<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/images',[ImagesController::class,'create']);

Route::post('/images',[ImagesController::class,"store"])->name('images');

Route::get("/images/{image}",[ImagesController::class,"show"])->name('images.show');


Route::get('/folder',[FolderController::class,"create"]);
Route::post('/folder',[FolderController::class,"store"])->name("folder");
Route::get("/folder/{folder}",[FolderController::class,["show"]);
