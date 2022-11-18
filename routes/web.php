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


Route::get('/mainpage', function(){
    return view('dashboard');
});

Route::get('/testpage', function(){
    return view('testpage');
});

Route::get('/second', function(){
    return view('secondpage');
})->name('second');

Route::get('/record', function(){
    return view('recordAttendance');
})->name('record');