<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NaprendszerController;

Route::view('/', 'welcome');

Route::get('/bolygok/{id}', [NaprendszerController::class, 'Bolygok']);

Route::get('/holdak/{id}', [NaprendszerController::class, 'Holdak']);

Route::get('/edit/{id}', [NaprendszerController::class, 'Edit']);
Route::post('/edit/{id}', [NaprendszerController::class, 'EditData']);
