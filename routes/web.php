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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


/*Home*/
Route::get('/home', 'HomeController@index')->name('home');


/*admin*/
Route::get('/admin', 'AdminController@index');


/*Skill*/
Route::get('/skill', 'SkillController@index');

Route::post('/skill', 'SkillController@store');

Route::post('/skill/{id}', 'SkillController@update')->name('checkError');;



/*Competence*/
Route::get('/competence/{id?}', 'CompetenceController@index');

Route::post('/competence', 'CompetenceController@store');

Route::post('/competence/{id}', 'CompetenceController@update');

Route::delete('/competence/{id}', 'CompetenceController@destroy');



/*XpTb*/
Route::get('/xpTb', 'XpTbController@index');

Route::post('/xpTb', 'XpTbController@store');

Route::post('/xpTb/{id}', 'XpTbController@update');


/*Xp*/
Route::get('/xp/{id?}', 'XpController@index');


Route::post('/xp', 'XpController@store');

Route::post('/xp/{id}', 'XpController@update');


/*User*/
Route::get('/user', 'UserController@index');
Route::get('/calculator', 'UserController@show');