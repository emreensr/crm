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

Route::get('/','FrontController@index')->middleware('auth');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('user_add', 'StaffController@user_add')->name('user_add');
Route::post('insert', 'StaffController@insert')->name('user_insert');

Route::get('user_list', 'StaffController@index')->name('user_list');


Route::get('user_edit/{id}', 'StaffController@user_edit')->name('user_edit');
Route::post('user_editpost/{id}', 'StaffController@user_editpost')->name('user_editpost');



Route::get('user_view/{id}', 'StaffController@user_view')->name('user_view');


Route::get('user_delete/{id}', 'StaffController@user_delete')->name('user_delete');






