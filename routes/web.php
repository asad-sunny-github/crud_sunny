<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/',[StudentController::class, 'index'])->name('home');
Route::post('/new-student',[StudentController::class, 'create'])->name('new-student');
Route::get('/manage-student',[StudentController::class, 'manage'])->name('manage-student');
Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('edit-student');
Route::post('/update-student/{id}', [StudentController::class, 'update'])->name('update-student');
Route::post('/delete-student/{id}', [StudentController::class, 'delete'])->name('delete-student');


