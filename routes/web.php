<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
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


// Route::get('/', function () {
//     return view('auth.login');
// })->name('auth.login');

Route::resource('students', StudentController::class);
Route::get('students/create', [StudentController::class,'create'])->name('students.create');
Route::resource('teachers', TeacherController::class);
Route::get('teachers/create', [TeacherController::class,'create'])->name('teachers.create');
Route::resource('courses', CourseController::class);
Route::get('courses/create', [CourseController::class,'create'])->name('courses.create');
Route::resource('enrollments', EnrollmentController::class);
Route::resource('payments', PaymentController::class);
Route::get('report/report1/{pid}', [ReportController::class,'report1']);
Route::get('register', [AuthController::class,'register'])->name('auth.register');
Route::post('register', [AuthController::class,'store'])->name('store');
Route::get('/', [AuthController::class,'login'])->name('auth.login');
Route::post('login', [AuthController::class,'login_request'])->name('login');
