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
    return view('study/index');
});

// Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'StudyController@index')->name('study.index');
    Route::get('/create', 'StudyController@create')->name('study.create');
    Route::post('/create', 'StudyController@create')->name('study.store');
    Route::get('/study/{id}', 'StudyController@show')->name('post.show');
    Route::get('/study/{id}/edit','StudyController@edit')->name('study.edit');
    Route::post('study', 'TasksController@store')->name('study.store');
    Route::put('study/{id}', 'StudyController@update')->name('study.update');
    Route::delete('study/{id}', 'StudyController@delete')->name('study.delete');

//   });
