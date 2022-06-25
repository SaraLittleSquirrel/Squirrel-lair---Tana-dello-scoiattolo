<?php

use App\Http\Controllers\ExcerciseTypeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('user.templates',TemplateController::class);

Route::resource('user.excercisetypes',ExcerciseTypeController::class);

Route::get('login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');

Route::post('login', [LoginController::class, 'login'])->name('login.login')->middleware('guest');

Route::post('logout', [LoginController::class, 'logout'])->name('login.logout')->middleware('auth');

Route::get('register', [RegisterController::class, 'index'])->name('register.index')->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('user/{user}/excercisetypes/{excercisetype}/delete', [ExcerciseTypeController::class, 'confirmDelete'])->name('excercisetype.confirmDelete')->middleware('auth');

Route::get('user/{user}/templates/{template}/delete', [TemplateController::class, 'confirmDelete'])->name('template.confirmDelete')->middleware('auth');

Route::get('/edit_template', function () {
    return view('edit_template');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/questions', function () {
    return view('questions');
})->name('questions');

Route::get('/check_username', [RegisterController::class, 'checkUsername']);

//da eliminare quando finito
Route::get('/edit', function () {
    return view('templates/excercises/create');
});

Route::get('/templates', [TemplateController::class, 'searchTemplates'])->name('search');
