<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\NoticeboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ClassNameController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\FacultyController;

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

Route::redirect('/', destination: 'login');
Route::middleware('auth')->group(function(){
Route::resource('author', AuthorController::class);
Route::resource('batch', BatchController::class);
Route::resource('book', BookController::class);
Route::resource('course', CourseController::class);
Route::resource('fee', FeeController::class);
Route::resource('instructor', InstructorController::class);
Route::get('instructor/changePassword/{id}',[App\Http\Controllers\InstructorController::class, 'changePassword']);
Route::resource('noticeboard', NoticeboardController::class);
Route::resource('payment', PaymentController::class);
Route::resource('student', StudentController::class);
Route::get('student/changePassword/{id}',[App\Http\Controllers\StudentController::class, 'changePassword']);
Route::resource('subject', SubjectController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('profile', ProfileController::class);
Route::get('profile/changeImage/{id}',[App\Http\Controllers\ProfileController::class, 'changeImage']);
Route::resource('user_role', UserRoleController::class);
Route::resource('user', UserController::class);
Route::get('user/changePassword/{id}',[App\Http\Controllers\UserController::class, 'changePassword']);
Route::resource('companyInfo', CompanyInfoController::class);
Route::get('companyInfo/changeImage/{id}',[App\Http\Controllers\CompanyInfoController::class, 'changeImage']);
Route::resource('enrollment', EnrollmentController::class);
Route::resource('branch', BranchController::class);
Route::resource('classname', ClassNameController::class);
Route::resource('classroom', ClassRoomController::class);
Route::resource('faculty', FacultyController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ------------- Status active or deactive ----------------------- 
// ================== Course Status Update route =============================
Route::get('course/onStatus/{id}',[App\Http\Controllers\CourseController::class, 'onStatus']);
Route::get('course/offStatus/{id}',[App\Http\Controllers\CourseController::class, 'offStatus']);

// ==================================== Author Status Update Route ====================
Route::get('author/onStatus/{id}',[App\Http\Controllers\AuthorController::class, 'onStatus']);
Route::get('author/offStatus/{id}',[App\Http\Controllers\AuthorController::class, 'offStatus']);


// ==================================== Batch Status Update Route ====================
Route::get('batch/onStatus/{id}',[App\Http\Controllers\BatchController::class, 'onStatus']);
Route::get('batch/offStatus/{id}',[App\Http\Controllers\BatchController::class, 'offStatus']);


// ==================================== Book Status Update Route ====================
Route::get('book/onStatus/{id}',[App\Http\Controllers\BookController::class, 'onStatus']);
Route::get('book/offStatus/{id}',[App\Http\Controllers\BookController::class, 'offStatus']);


// ==================================== Fees Status Update Route ====================
Route::get('fee/onStatus/{id}',[App\Http\Controllers\FeeController::class, 'onStatus']);
Route::get('fee/offStatus/{id}',[App\Http\Controllers\FeeController::class, 'offStatus']);


// ==================================== Instructor Status Update Route ====================
Route::get('instructor/onStatus/{id}',[App\Http\Controllers\InstructorController::class, 'onStatus']);
Route::get('instructor/offStatus/{id}',[App\Http\Controllers\InstructorController::class, 'offStatus']);


// ==================================== Noticeboard Status Update Route ====================
Route::get('noticeboard/onStatus/{id}',[App\Http\Controllers\NoticeboardController::class, 'onStatus']);
Route::get('noticeboard/offStatus/{id}',[App\Http\Controllers\NoticeboardController::class, 'offStatus']);


// ==================================== Payments Status Update Route ====================
Route::get('payment/onStatus/{id}',[App\Http\Controllers\PaymentController::class, 'onStatus']);
Route::get('payment/offStatus/{id}',[App\Http\Controllers\PaymentController::class, 'offStatus']);


// ==================================== Students Status Update Route ====================
Route::get('student/onStatus/{id}',[App\Http\Controllers\StudentController::class, 'onStatus']);
Route::get('student/offStatus/{id}',[App\Http\Controllers\StudentController::class, 'offStatus']);


// ==================================== User Status Update Route ====================
Route::get('user/onStatus/{id}',[App\Http\Controllers\UserController::class, 'onStatus']);
Route::get('user/offStatus/{id}',[App\Http\Controllers\UserController::class, 'offStatus']);


// ==================================== User Role Status Update Route ====================
Route::get('user_role/onStatus/{id}',[App\Http\Controllers\userRoleController::class, 'onStatus']);
Route::get('user_role/offStatus/{id}',[App\Http\Controllers\userRoleController::class, 'offStatus']);


// ==================================== Branches Status Update Route ====================
Route::get('branch/onStatus/{id}',[App\Http\Controllers\BranchController::class, 'onStatus']);
Route::get('branch/offStatus/{id}',[App\Http\Controllers\BranchController::class, 'offStatus']);


// ==================================== Faculty Status Update Route ====================
Route::get('faculty/onStatus/{id}',[App\Http\Controllers\FacultyController::class, 'onStatus']);
Route::get('faculty/offStatus/{id}',[App\Http\Controllers\FacultyController::class, 'offStatus']);




// ==================================== Class Name Status Update Route ====================
Route::get('classname/onStatus/{id}',[App\Http\Controllers\ClassNameController::class, 'onStatus']);
Route::get('classname/offStatus/{id}',[App\Http\Controllers\ClassNameController::class, 'offStatus']);




// ==================================== Class Room Status Update Route ====================
Route::get('classroom/onStatus/{id}',[App\Http\Controllers\ClassRoomController::class, 'onStatus']);
Route::get('classroom/offStatus/{id}',[App\Http\Controllers\ClassRoomController::class, 'offStatus']);



});

Auth::routes();
