<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::resource('students', StudentController::class);
Route::get('students/create', [StudentController::class,'create'])->name('students.create');
Route::resource('teachers', TeacherController::class);
Route::get('teachers/create', [TeacherController::class,'create'])->name('teachers.create');
