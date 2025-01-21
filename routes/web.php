<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
Route::post('/vehicles', [VehicleController:: class, 'store'])->name('vehicles.store');
Route::put('/vehicles/{id}', [VehicleController:: class, 'update'])->name('vehicles.update');
Route::get('/vehicles/{id}', [VehicleController:: class, 'edit'])->name('vehicles.edit');
Route::delete('/vehicles/{id}', [VehicleController:: class, 'destroy'])->name('vehicles.destroy');