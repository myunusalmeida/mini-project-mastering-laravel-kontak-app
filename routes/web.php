<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
Route::get('buat', [ContactController::class, 'create'])->name('contacts.create');
Route::post('buat/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('edit/update/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('hapus/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
