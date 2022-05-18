<?php

use App\Http\Controllers\TemplateController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('templates',TemplateController::class);

Route::get('/programs', function () {
    return view('programs');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/insert_excercise', function () {
    return view('insert_excercise');
});

Route::get('/excercise_list', function () {
    return view('excercise_list');
});

Route::get('/edit_template', function () {
    return view('edit_template');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/questions', function () {
    return view('questions');
});
