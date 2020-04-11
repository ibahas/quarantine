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


Route::get('/', 'HomeController@welcome');

/* بيانات المريض كاملة */
Route::resource('sick', 'SickController');
/*====================================================================================================*/

/*  الاماكن التي زارها المريض */
Route::resource('places', 'PlacesController');
/*====================================================================================================*/

/* الأفراد الذين خالطهم قبل اكتشاف الإصابة */
Route::resource('individuals', 'IndividualsController');
/*====================================================================================================*/

/* الأشخاص الذين عادوا من السفر */
Route::resource('leave', 'LeaveController');
/*====================================================================================================*/

/* الفحوصات الطبية  */
Route::resource('medicalexaminations', 'MedicalexaminationsController');
/*====================================================================================================*/

/* تاريخ الخروج و الحالة الصحية */
Route::resource('healthstatus', 'HealthstatusController');
/*====================================================================================================*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
