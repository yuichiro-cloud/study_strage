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
    // Route::get('/post', 'StudyController@index')->name('study.index');
    Route::get('/new', 'StudyController@new')->name('study.new');
    Route::post('/new', 'StudyController@create')->name('study.create');
    Route::get('/study/{id}', 'StudyController@show')->name('post.show');

//   });
