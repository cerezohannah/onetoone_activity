<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index'])->name('home');

Route::get('/students/create', [StudentController::class,'create'])->name('create');
Route::post('/students', [StudentController::class, 'store'])->name('store');

Route::get('/students/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('update');

Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('destroy');
