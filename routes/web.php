<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/admin_dashboard/indexMobi', 'Admin\DashboardController@indexOne')->middleware('role:admin')->name('indexMobi');

Route::get('/admin_dashboard/{center}', 'Admin\DashboardController@index')->middleware('role:admin')->name("center.dashboard");
Route::get('/user_dashboard', 'User\DashboardController@index')->middleware('role:user');
Route::get('/teacher_dashboard', 'Teacher\DashboardController@index')->middleware('role:teacher');
Route::middleware(['auth:sanctum', 'verified'])->get('/watch', function () {
    return view('components.course-player');
})->name('player');
Route::post('/upload' , 'UploadController@upload')->middleware('role:admin');;
Route::get('/search' , 'UploadController@search')->middleware('role:admin');;
Route::delete('/delete' , 'UploadController@delete')->middleware('role:admin');;
