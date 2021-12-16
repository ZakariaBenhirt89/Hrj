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


Route::get('/admin_dashboard/indexMobi', 'Admin\DashboardController@indexOne')->middleware('role:admin')->name('indexMobi');
Route::get('/admin_dashboard/ficheAcc', 'Admin\DashboardController@ficheAcc')->middleware('role:admin')->name('ficheAcc');

Route::get('/admin_dashboard/{center}', 'Admin\DashboardController@index')->middleware('role:admin')->name("center.dashboard");
Route::get('/user_dashboard', 'User\DashboardController@index')->middleware('role:user');
Route::get('/sendMAil', 'Admin\DashboardController@sendMAil')->middleware('role:admin')->name('admin.mail.send');
Route::get('/userDetails/{id}', 'Admin\DashboardController@detail')->middleware('role:admin')->name('admin.user.detail');

Route::post('/storeImg', 'Admin\DashboardController@storeImage')->middleware('role:admin')->name('admin.image.store');
Route::post('/deleteImg', 'Admin\DashboardController@deleteImage')->middleware('role:admin')->name('admin.image.delete');
Route::post('/acceuil', 'Admin\DashboardController@handleAcc')->middleware('role:admin')->name('admin.acc.create');

Route::get('/teacher_dashboard', 'Teacher\DashboardController@index')->middleware('role:teacher');
Route::post('/upload' , 'UploadController@upload')->middleware('role:admin');;
Route::get('/search' , 'UploadController@search')->middleware('role:admin');;
Route::delete('/delete' , 'UploadController@delete')->middleware('role:admin');;
