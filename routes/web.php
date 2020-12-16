<?php

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

//ADMIN
Route::group(['middleware' => 'admin'], function(){
Route::get('/admin', 'AdminHomeController@getMaster');
});

//Admin
Route::get('/index/admin', 'BackEndAdminController@getMaster')->name('backAdmin.master');
Route::get('/index/admin/data', 'AdminController@index')->name('admin.index');
Route::get('/index/admin/Read-User-Data/{id}', 'AdminController@readUserData')->name('readUserData');
Route::get('/index/admin/delete/{id}', 'AdminController@destroy')->name('deleteUser');

Route::get('/logout', 'Auth\LoginController@logout');

//frontdEnd
Route::get('/index', 'FrontEndHomeController@getMaster')->name('frontEnd.home');
Route::get('/index/pendaftaran', 'FrontEndHomeController@getPage')->name('pendaftaran');
Route::get('/index/pendaftaran/create', 'FrontEndHomeController@getPage1');

//Biodata Controller
Route::get('/home/biodata/create', 'BiodataController@create')->name('biodata.create');
Route::post('/home/biodata/store', 'BiodataController@store')->name('biodata.store');
Route::get('/home/biodata/index', 'BiodataController@index')->name('biodata.index');
Route::get('/home/biodata/edit/{id}', 'BiodataController@edit')->name('biodata.edit');
Route::post('/home/biodata/update/{id}', 'BiodataController@update')->name('biodata.update');
Route::get('/home/biodata/delete/{id}', 'BiodataController@destroy')->name('biodata.delete');

//ViewPDF
Route::get('/home/biodata/view', 'pdfController@getMaster')->name('biodata.pdf');

//DownloadPDF
Route::get("download-pdf","HomeController@downloadPDF");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
