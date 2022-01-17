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
    return view('auth.login');
});

Route::get('/desactivated', function () {
    return view('components.desactivated');
});
Route::get('/super', function () {
    return view('components.super');
});

Route::get('/admin_dashboard/indexMobi', 'Admin\DashboardController@indexOne')->middleware('role:admin')->name('indexMobi');
Route::get('/admin_dashboard/ficheAcc', 'Admin\DashboardController@ficheAcc')->middleware('role:admin')->name('ficheAcc');
Route::get('/admin_dashboard/search/searchdup', 'Admin\DashboardController@searchDup')->middleware('role:admin')->name('admin.search.dup');

Route::get('/admin_dashboard/{center}', 'Admin\DashboardController@index')->middleware('role:admin')->name("center.dashboard");
Route::get('/user_dashboard', 'User\DashboardController@index')->middleware('role:user');
Route::get('/sendMAil', 'Admin\DashboardController@sendMAil')->middleware('role:admin')->name('admin.mail.send');
Route::get('/userDetails/{id}', 'Admin\DashboardController@detail')->middleware('role:admin')->name('admin.user.detail');
Route::get('/comité/{id}', 'Admin\DashboardController@comite')->middleware('role:admin')->name('admin.user.comite');
Route::get('/placement/{id}', 'Admin\DashboardController@goPlacement')->middleware('role:admin')->name('admin.user.placement');
Route::get('/suivi/{id}', 'Admin\DashboardController@goSuivi')->middleware('role:admin')->name('admin.user.suivi');

Route::post('/storeImg', 'Admin\DashboardController@storeImage')->middleware('role:admin')->name('admin.image.store');
Route::post('/deleteImg', 'Admin\DashboardController@deleteImage')->middleware('role:admin')->name('admin.image.delete');
Route::post('/acceuil', 'Admin\DashboardController@handleAcc')->middleware('role:admin')->name('admin.acc.create');
Route::post('/mobilization', 'Admin\DashboardController@mobi')->middleware('role:admin')->name('admin.mobi.create');
Route::get('/orientation', 'Admin\DashboardController@orientation')->middleware('role:admin')->name('admin.orientation.go');
Route::get('/suivi', 'Admin\DashboardController@suivi')->middleware('role:admin')->name('admin.suivi.go');
Route::get('/rfc', 'Admin\DashboardController@rfc')->middleware('role:admin')->name('admin.rfc.go');
Route::get('/placement', 'Admin\DashboardController@placement')->middleware('role:admin')->name('admin.placement.go');
Route::get('/charge', 'Admin\DashboardController@charger')->middleware('role:admin')->name('admin.charge.go');
Route::get('/data', 'Admin\DashboardController@data')->middleware('role:admin')->name('admin.data.go');
Route::get('/administration', 'Admin\DashboardController@admin')->middleware('role:admin')->name('admin.administration.go');
Route::post('/administration/add', 'Admin\DashboardController@adminAdd')->middleware('role:admin')->name('admin.administration.add');

Route::post('/upload' , 'UploadController@upload')->middleware('role:admin');;
Route::get('/search' , 'UploadController@search')->middleware('role:admin');;
Route::delete('/delete' , 'UploadController@delete')->middleware('role:admin');;
Route::post('/post/member' , 'Admin\DashboardController@addMember')->middleware('role:admin')->name('admin.add.member');
Route::post('/store/pv/{id}' , 'Admin\DashboardController@storePv')->middleware('role:admin')->name('admin.store.pv');
Route::post('/store/placement/{id}' , 'Admin\DashboardController@storePlacement')->middleware('role:admin')->name('admin.store.placement');
Route::post('/store/suivi/{id}' , 'Admin\DashboardController@storeSuivi')->middleware('role:admin')->name('admin.store.suivi');
Route::post('/store/charger' , 'Admin\DashboardController@storecharger')->middleware('role:admin')->name('admin.store.charger');
Route::post('/store/data/{type}' , 'Admin\DashboardController@storeData')->middleware('role:admin')->name('admin.store.data');
Route::get('/deactivet/{id}' , 'Admin\DashboardController@desactivet')->middleware('role:admin')->name('admin.dc.user');
Route::get('/activet/{id}' , 'Admin\DashboardController@activet')->middleware('role:admin')->name('admin.ac.user');
Route::post('/createAdmin' , 'Admin\DashboardController@createAdmin')->middleware('role:admin')->name('admin.store.user');
Route::get('/deactivet/res/{id}' , 'Admin\DashboardController@desactivetRes')->middleware('role:admin')->name('admin.dc.res');
Route::get('/activet/res/{id}' , 'Admin\DashboardController@activetRes')->middleware('role:admin')->name('admin.ac.res');

