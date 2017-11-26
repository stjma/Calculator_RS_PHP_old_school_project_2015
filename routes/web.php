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
Route::get('/Skill', 'SkillController@index');

Route::post('/Skill', 'SkillController@create');

Route::get('/Skill/{id}', 'SkillController@edit');



/*Competence*/
Route::get('/Competence/{id?}', 'CompetenceController@index');

Route::post('/Competence', 'CompetenceController@create');

Route::get('/Competence/{id}', 'CompetenceController@edit');

Route::delete('/Competence/{id}', 'CompetenceController@destroy');



/*XpTable*/
Route::get('/XpTable', 'XpTableController@index');

Route::post('/XpTable', 'XpTableController@create');

Route::get('/XpTable/{id}', 'XpTableController@edit');


/*Xp*/
Route::get('/Xp/{id?}', 'XpController@index');

Route::post('/Xp', 'XpController@create');

Route::get('/Xp/{id}', 'XpController@edit');


/*User*/
Route::get('/User', 'UserController@index');
Route::get('/Calculator', 'UserController@show');