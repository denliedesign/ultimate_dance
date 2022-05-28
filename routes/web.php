<?php

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

Route::get('/about', function () {
    return view('/about');
});

Route::get('/classes', function () {
    return view('/classes');
});

Route::get('/academy', function () {
    return view('/academy');
});

Route::get('/powerhouse', function () {
    return view('/powerhouse');
});

Route::get('/calendar', function () {
    return view('/calendar');
});

Route::get('/summer', function () {
    return view('/summer');
});

Route::get('/recital', function () {
    return view('/recital');
});

Route::get('/parties', function () {
    return view('/parties');
});

Route::get('/faq', function () {
    return view('/faq');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
