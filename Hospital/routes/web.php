<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'indexa']);
Route::get('/home',[HomeController::class,'redirectdd']);

Route::get('/addDoctorView',[AdminController::class,'addDoctorView']);

Route::post('/uploadDoctor',[AdminController::class,'uploadDoctor']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
