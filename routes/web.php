<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LeadController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/fleet', [CarController::class, "listCar"]);

Route::get('/form/{id}', [CarController::class, "form"]);

Route::post('/lead', [LeadController::class , "insertLead"]);

Route::get('/admin', [AdminController::class,"index"]);
Route::post('/admin', [AdminController::class,"store"]);

Route::get('/dashboard', [AdminController::class,"dashboard"]);