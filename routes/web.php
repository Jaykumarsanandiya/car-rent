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
Route::get('/contact', [CarController::class, "contact"]);
Route::post('/contact', [CarController::class, "contactSave"]);
Route::get('/about', [CarController::class, "about"]);
Route::get('/form/{id}', [CarController::class, "form"]);

Route::post('/lead', [LeadController::class , "insertLead"]);

Route::get('/admin', [AdminController::class,"index"]);
Route::post('/admin', [AdminController::class,"store"]);




Route::get('/dashboard', [AdminController::class,"dashboard"]);
Route::get('/dashboard/{id}', [AdminController::class,"updateStatus"]);
Route::get('/dashboard-contact', [AdminController::class,"contact"]);
Route::get('/dashboard-add-car',function () {
    return view('CarRegister');
}) ;
Route::post('/dashboard-add-car', [AdminController::class,"addCar"]);
Route::get('/dashboard-show-car', [AdminController::class,"showCar"]);
Route::get('/dashboard-delete-car/{id}', [AdminController::class,"deleteCar"]);