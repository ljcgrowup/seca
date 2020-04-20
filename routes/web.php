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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Classroom')->prefix('classrooms')->group(function () {
    Route::name('classroom.')->group(function () {
        Route::resource('/', 'ClassroomController');
        Route::get('/config-release', 'ClassroomController@showConfigReleaseClassroom')->name('config-release');
        Route::put('/classrooms/config-release-update', 'ClassroomController@updateRelease')->name('config-release-update');
        Route::get('/config-internship', 'ClassroomController@showConfigInternship')->name('config-internship');
        Route::post('/store-config-internship', 'ClassroomController@storeConfigInternship')->name('store-config-internship');
    });
});