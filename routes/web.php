<?php

/**
 * @file
 */

use App\Http\Controllers\DogsController;
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


Route::get('/dogs', [DogsController::class, 'index'])->name('dogs');
Route::get('/dog/create', [DogsController::class, 'create'])->name('dog.create');
Route::post('/dogs', [DogsController::class, 'store'])->name('dogs.store');
