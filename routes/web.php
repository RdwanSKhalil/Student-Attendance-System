<?php

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

# Home Route
Route::get('/', function () {
    return view('home');
});

# Class Page Routes
Route::get('/classrooms', function (){
    return view('home');
})->name('classrooms');

Route::get('/classroom/{id}', function ($id) {
    return view('classroom')->with('id', $id);
})->name('show-class');

# Studnet Page Routes
Route::get('/students', function () {
    return view('students');
})->name('students');


# Info Page Routes
Route::get('/Info', function () {
    return view('info');
})->name('info');

# Student Show Page
Route::get('/Show/{id}', function ($id) {
    return view('student-show')->with('id', $id);
})->name('show-student');