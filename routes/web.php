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
Route::group(['middleware' => 'optimizeHtml'], function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('select-tutor', 'TutorController@showTutors')->name('get-tutor');

    Route::get('become-tutor', 'TutorController@showTutors')->name('become-tutor');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
