<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\monitorController;

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

Route::get('/',[monitorController::class, 'index'])->name('monitor.index');

Route::get('/monitor/create', [monitorController::class, 'create'])->name('monitor.create');

Route::post('/monitor', [monitorController::class, 'store'])->name('monitor.store');

Route::get('/monitor/{monitor}/edit', [monitorController::class, 'edit'])->name('monitor.edit');

Route::put('/monitor/{monitor}', [monitorController::class, 'update'])->name('monitor.update');
Route::patch('/monitor/{monitor}', [monitorController::class, 'update']); // Alternatif PUT

Route::delete('/monitor/{monitor}', [monitorController::class, 'destroy'])->name('monitor.destroy');
