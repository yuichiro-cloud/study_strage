<?php

use App\Http\Controllers\StudyController;
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
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'StudyController@index')->name('study.index');
    Route::get('/create', 'StudyController@create')->name('study.create');
    Route::post('/store', 'StudyController@store')->name('study.store');
    Route::get('/study/{id}/edit','StudyController@edit')->name('study.edit');
    Route::put('/study/{id}/update', 'StudyController@update')->name('study.update');
    Route::delete('study/{id}/delete', 'StudyController@delete')->name('study.delete');
    Route::get('/study/{id}', 'StudyController@show')->name('study.show');
    Route::get('/getStudy','StudyController@getStudy')->name('study.getStudy');
    Route::post('/lanStore','StudyController@lanStore')->name('study.lanStore');
    Route::get('/search', 'StudyController@search')->name('study.search');

});
Route::get('/testlogin', 'Auth\LoginController@testLogin');
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/home', 'HomeController@index')->name('home');
