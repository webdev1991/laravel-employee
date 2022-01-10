<?php

use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\CountryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;


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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/main', function () {
    return view('layouts/main');
});

Route::get('/buttons', function () {
    return view('layouts/buttons');
});

Route::get('/cards', function () {
    return view('layouts/cards');
});
Route::get('/undraw_rocket', function () {
    return view('img/undraw_rocket');
});

Route::resource('users', UserController::class);
Route::resource('countries', CountryController::class);
Route::post('users/{user}/change-password', [ChangePasswordController::class, 'change_password'])->name('users.change.password');


Route::get('{any}', function() {
    return view('employees.index');
})->where('{any}', '.*');
