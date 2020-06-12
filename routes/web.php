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

//EDUCATİON

Route::get('education', 'EducationController@education')->name('education');
Route::get('educationplan', 'EducationController@educationplan')->name('educationplan');
Route::get('educationinfo', 'EducationController@educationinfo')->name('educationinfo');
Route::get('personaledu', 'EducationController@personaledu')->name('personaledu');
Route::get('yeareducation', 'EducationController@yeareducation')->name('yeareducation');

//TASK AND PROJECT

Route::get('workinginfo', 'TaskController@workinginfo')->name('workinginfo');
Route::get('task', 'TaskController@task')->name('task');
Route::get('project', 'TaskController@project')->name('project');
Route::get('projectrealization', 'TaskController@projectrealization')->name('projectrealization');
Route::get('repetitivetask', 'TaskController@repetitivetask')->name('repetitivetask');

//HUMAN RESOURCES

Route::get('identity', 'HumanResourcesController@identity')->name('identity');
Route::get('working', 'HumanResourcesController@working')->name('working');
Route::get('personal', 'HumanResourcesController@personal')->name('personal');
Route::get('education', 'HumanResourcesController@education')->name('education');
Route::get('jobapplication', 'HumanResourcesController@jobapplication')->name('jobapplication');
Route::get('permission', 'HumanResourcesController@permission')->name('permission');
Route::get('contunity', 'HumanResourcesController@contunity')->name('contunity');
Route::get('healthreport', 'HumanResourcesController@healthreport')->name('healthreport');
Route::get('shift', 'HumanResourcesController@shift')->name('shift');

//QUALİTY

Route::get('docapplication', 'QualityController@docapplication')->name('docapplication');
Route::get('doctracking', 'QualityController@doctracking')->name('doctracking');
Route::get('handbook', 'QualityController@handbook')->name('handbook');
Route::get('policies', 'QualityController@policies')->name('policies');
Route::get('processes', 'QualityController@processes')->name('processes');
Route::get('procedure', 'QualityController@procedure')->name('procedure');
Route::get('form', 'QualityController@form')->name('form');
Route::get('instructions', 'QualityController@instructions')->name('instructions');
Route::get('rootcauseanalysis', 'QualityController@rootcauseanalysis')->name('rootcauseanalysis');

//PERSONAL DATA

Route::get('organization', 'PersonalDataController@organization')->name('organization');
Route::get('clarificationtexts', 'PersonalDataController@clarificationtexts')->name('clarificationtexts');
Route::get('privacyagreements', 'PersonalDataController@privacyagreements')->name('privacyagreements');
Route::get('expressconsent', 'PersonalDataController@expressconsent')->name('expressconsent');
Route::get('expressconsentrecords', 'PersonalDataController@expressconsentrecords')->name('expressconsentrecords');
Route::get('datatransferrecords', 'PersonalDataController@datatransferrecords')->name('datatransferrecords');






