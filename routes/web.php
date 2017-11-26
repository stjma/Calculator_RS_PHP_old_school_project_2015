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

Route::post('/skill', 'SkillController@create');

Route::get('/skill/{id}', 'SkillController@edit');



/*Competence*/
Route::get('/competence/{id?}', 'CompetenceController@index');

Route::post('/competence', 'CompetenceController@create');

Route::get('/competence/{id}', 'CompetenceController@edit');

Route::delete('/competence/{id}', 'CompetenceController@destroy');



/*XpTb*/
Route::get('/xpTb', 'XpTbController@index');

Route::post('/xpTb', 'XpTbController@create');

Route::get('/xpTb/{id}', 'XpTbController@edit');


/*Xp*/
Route::get('/xp/{id?}', 'XpController@index');

Route::post('/xp', 'XpController@create');

Route::get('/xp/{id}', 'XpController@edit');


/*User*/
Route::get('/user', 'UserController@index');
Route::get('/calculator', 'UserController@show');