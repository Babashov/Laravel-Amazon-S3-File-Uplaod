<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/images',[Images::class,['create']]);

Route::post('/images',[Images::class,["strore"]]);

Route::get("/images/{show}",[Images::class,["show"]]);
