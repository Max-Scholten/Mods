<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|php artisan
make:controller ModController –r
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mods', [ModsController::class, 'index'])->name('mods.index');
Route::get('/mods/create', [ModsController::class, 'create'])->name('mods.create');

Route::get('/mods/{index}', [ModsController::class, 'show'])->name('mods.show');
Route::get('/mods/{index}/edit', [ModsController::class, 'edit'])->name('mods.edit');
Route::put('/mods/{mod}', [ModsController::class, 'update'])->name('mods.update');
Route::post('/mods/', [ModsController::class, 'store'])->name('mods.store');
Route::delete('/mods/{mod}', [ModsController::class, 'destroy'])->name('mods.destroy');
