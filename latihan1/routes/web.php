<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosterController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/form', 'form');
Route::post('/submit-form', [PosterController::class, 'submit']);