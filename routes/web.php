<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\ResetPassword\ForgotPasswordController;
use App\Http\Controllers\ResetPassword\ResetPasswordController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::controller(DepartmentsController::class)->group(function (){
    Route::get('/departments', 'index');
    Route::post('/departments/search','search')->name('departments.search');
    Route::get('/departments/create','create')->name('departments.create');
    Route::post('/departments/create','store')->name('departments.store');
    Route::get('/departments/edit/{id}','edit')->name('departments.edit');
    Route::post('/departments/edit/{id}','update')->name('departments.update');
    Route::post('/departments/destroy/{id}','destroy')->name('departments.destroy');
});

Route::controller(CitiesController::class)->group(function (){
    Route::get('/cities', 'index');
    Route::post('/cities/search','search')->name('cities.search');
    Route::get('/cities/create','create')->name('cities.create');
    Route::post('/cities/create','store')->name('cities.store');
    Route::get('/cities/edit/{id}','edit')->name('cities.edit');
    Route::post('/cities/edit/{id}','update')->name('cities.update');
    Route::post('/cities/destroy/{id}','destroy')->name('cities.destroy');
});

Route::controller(EmployeesController::class)->group(function (){
    Route::get('/employees', 'index');
    Route::post('/employees/search','search')->name('employees.search');
    Route::get('/employees/create','create')->name('employees.create');
    Route::post('/employees/create','store')->name('employees.store');
    Route::get('/employees/edit/{id}','edit')->name('employees.edit');
    Route::post('/employees/edit/{id}','update')->name('employees.update');
    Route::post('/employees/destroy/{id}','destroy')->name('employees.destroy');
    Route::get('/employees/show/{id}','show')->name('employees.show');
});

Route::controller(CountriesController::class)->group(function (){
    Route::get('/conutries', 'index');
    Route::post('/conutries/search','search')->name('conutries.search');
    Route::get('/conutries/create','create')->name('conutries.create');
    Route::post('/conutries/create','store')->name('conutries.store');
    Route::get('/conutries/edit/{id}','edit')->name('conutries.edit');
    Route::post('/conutries/edit/{id}','update')->name('conutries.update');
    Route::post('/conutries/destroy/{id}','destroy')->name('conutries.destroy');
});

Route::controller(StatesController::class)->group(function (){
    Route::get('/states', 'index');
    Route::post('/states/search','search')->name('states.search');
    Route::get('/states/create','create')->name('states.create');
    Route::post('/states/create','store')->name('states.store');
    Route::get('/states/edit/{id}','edit')->name('states.edit');
    Route::post('/states/edit/{id}','update')->name('states.update');
    Route::post('/states/destroy/{id}','destroy')->name('states.destroy');
});

Route::controller(DivisionsController::class)->group(function (){
    Route::get('/divisions', 'index');
    Route::post('/divisions/search','search')->name('divisions.search');
    Route::get('/divisions/create','create')->name('divisions.create');
    Route::post('/divisions/create','store')->name('divisions.store');
    Route::get('/divisions/edit/{id}','edit')->name('divisions.edit');
    Route::post('/divisions/edit/{id}','update')->name('divisions.update');
    Route::post('/divisions/destroy/{id}','destroy')->name('divisions.destroy');
});

Route::controller(SalariesController::class)->group(function (){
    Route::get('/salaries', 'index');
    Route::post('/salaries/search','search')->name('salaries.search');
    Route::get('/salaries/create','create')->name('salaries.create');
    Route::post('/salaries/create','store')->name('salaries.store');
    Route::get('/salaries/edit/{id}','edit')->name('salaries.edit');
    Route::post('/salaries/edit/{id}','update')->name('salaries.update');
    Route::post('/salaries/destroy/{id}','destroy')->name('salaries.destroy');
});

//show the login view
Route::get('/',[AuthController::class, 'index'])->name('login')->middleware('guest');

//Authenticate a user
Route::post('/',[AuthController::class, 'authenticate'])->name('auth.authenticate');

//logout the user
Route::get('/logout',[AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');

//show user details
Route::get('/admin',[AuthController::class, 'show'])->name('auth.show')->middleware('auth');

Route::get('/password/reset',[ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email',[ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}',[ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset',[ResetPasswordController::class,'reset']);

