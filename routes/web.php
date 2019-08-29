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

Route::get('/', 'QuestionsController@index')->name('question.index');

Route::post('question/create', 'QuestionsController@store')->name('question.create');
Route::get('question/{id}', 'QuestionsController@show')->name('question.show');

Route::post('answer/create/{id}', 'AnswersController@store')->name('answer.create');
