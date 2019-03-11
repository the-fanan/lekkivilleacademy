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

    Route::get('select-tutor', 'TutorController@showTutors')->name('select-tutor');

    Route::get('become-tutor', 'TutorController@showBecomeTutor')->name('become-tutor');

    Route::post('become-tutor', 'TutorController@becomeTutor')->name('become-tutor.post');

    Route::get('select-lesson/{tutor?}', 'LessonController@showSelectLesson')->name('select-lesson');

    Route::get('client-details/{package?}', 'UserController@showGetClientDetails')->name('client-details.show');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
