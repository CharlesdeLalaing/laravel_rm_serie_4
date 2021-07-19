<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\VegetableController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/fruit', [FruitController::class,'index'])->name('fruit');
Route::get('/vegetable', [VegetableController::class,'index'])->name('vegetable');

//CREATE
Route::get('/fruit/create', [FruitController::class,'create']);
Route::get('/vegetable/create', [VegetableController::class,'create']);

//STORE
Route::post('/fruit/store', [FruitController::class,'store']);
Route::post('/vegetable/store', [VegetableController::class,'store']);
