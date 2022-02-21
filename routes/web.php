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

Route::get('/course',[App\Http\Controllers\CourseController::class, 'index']);
Route::get('/course/create',[App\Http\Controllers\CourseController::class, 'create']);
Route::post('/course/create',[App\Http\Controllers\CourseController::class, 'store']);
Route::get('/course/edit/{course}',[App\Http\Controllers\CourseController::class, 'edit']);
Route::post('/course/update/{course}',[App\Http\Controllers\CourseController::class, 'update']);
Route::get('/course/delete/{course}',[App\Http\Controllers\CourseController::class, 'delete']);

Route::get('/department',[App\Http\Controllers\DepartmentController::class, 'index']);
Route::get('/department/create',[App\Http\Controllers\DepartmentController::class, 'create']);
Route::post('/department/create',[App\Http\Controllers\DepartmentController::class, 'store']);
Route::get('/department/edit/{department}',[App\Http\Controllers\DepartmentController::class, 'edit']);
Route::post('/department/update/{department}',[App\Http\Controllers\DepartmentController::class, 'update']);
Route::get('/department/delete/{department}',[App\Http\Controllers\DepartmentController::class, 'delete']);


