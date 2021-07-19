<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\VegetableController;
use App\Http\Controllers\FruitAdminController;
use App\Http\Controllers\VegetableAdminController;
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
//FRONT-OFFICE
Route::get('/fruit', [FruitController::class,'index'])->name('fruit');
Route::get('/vegetable', [VegetableController::class,'index'])->name('vegetable');

//BACK-OFFICE
Route::get('/administration/fruitAdmin', [FruitAdminController::class,'fruit'])->name('fruitAdmin');
Route::get('/administration/vegetableAdmin', [VegetableAdminController::class,'vegetable'])->name('vagetableAdmin');

//B-O CREATE ELEMENT
Route::get('/administration/element/create', [VegetableAdminController::class,'create']);
Route::get('/administration/element/create', [FruitAdminController::class,'create']);

//B-O STORE
Route::post('/administration/element/create', [FruitAdminController::class,'store']);
Route::post('/administration/element/create', [VegetableAdminController::class,'store']);


//CREATE
Route::get('/fruit/create', [FruitController::class,'create']);
Route::get('/vegetable/create', [VegetableController::class,'create']);

//STORE
Route::post('/fruit/store', [FruitController::class,'store']);
Route::post('/vegetable/store', [VegetableController::class,'store']);

//SHOW
Route::get('/fruit/{id}/show', [FruitController::class,'show']);
Route::get('/vegetable/{id}/show', [VegetableController::class,'show']);

