<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// About page
Route::get('/about/create', [\App\Http\Controllers\Aboutcontroller::class, 'create']);
Route::post('/about/store', [\App\Http\Controllers\Aboutcontroller::class, 'store']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/about/edit/{id}', [\App\Http\Controllers\AboutController::class, 'edit']);
Route::put('/about/update/{id}', [\App\Http\Controllers\AboutController::class, 'update']);
Route::delete('/about/delete/{id}', [\App\Http\Controllers\AboutController::class, 'delete']);


// Home page
Route::get('/home/create', [\App\Http\Controllers\HomeController::class, 'create']);
Route::post('/home/store', [\App\Http\Controllers\HomeController::class, 'store']);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home/edit/{id}', [\App\Http\Controllers\HomeController::class, 'edit']);

// contact page
Route::get('/contact/create', [\App\Http\Controllers\ContactController::class, 'create']);
Route::post('/contact/store', [\App\Http\Controllers\ContactController::class, 'store']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::get('/contact/edit/{id}', [\App\Http\Controllers\ContactController::class, 'edit']);
Route::put('/contact/update/{id}', [\App\Http\Controllers\ContactController::class, 'update']);
Route::delete('/contact/delete/{id}', [\App\Http\Controllers\ContactController::class, 'delete']);

// service page
Route::get('/service/create', [\App\Http\Controllers\ServiceController::class, 'create']);
Route::post('/service/store', [\App\Http\Controllers\ServiceController::class, 'store']);
Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index']);
Route::get('/service/edit/{id}', [\App\Http\Controllers\ServiceController::class, 'edit']);
Route::put('/service/update/{id}', [\App\Http\Controllers\ServiceController::class, 'update']);













