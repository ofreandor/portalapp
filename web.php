<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\AdminLoginController;
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



Route::get('/', [FrontendController::class, 'index'])->name('homePage');
Route::get('/student/registration', [FrontendController::class, 'studentRegistration'])->name('registration');
Route::get('/get-id-card', [FrontendController::class, 'index'])->name('process.card');

Route::get('getDepartment/{id}', [FrontendController::class, 'getDepartments']);







Route::get('admin/login', [AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login');


Route::post('admin/login/check', [AdminLoginController::class, 'checkLogin'])->name('adminCheckLogin');


