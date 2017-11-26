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


/*Admin*/
Route::get('/Admin', 'AdminController@index');


/*Competence*/
Route::get('/Competence', 'CompetenceController@index');

Route::post('/CreateCompetence', 'CompetenceController@create');

Route::get('/EditCompetence', 'CompetenceController@edit');

Route::delete('/DeleteCompetence/{id}', 'CompetenceController@destroy');


/*Skill*/
Route::get('/Skill', 'SkillController@index');

Route::post('/CreateSkill', 'SkillController@create');

Route::get('/EditSkill', 'SkillController@edit');


/*XpTable*/
Route::get('/XpTable', 'XpTableController@index');

Route::post('/CreateXpTable', 'XpTableController@create');

Route::get('/EditXpTable', 'XpTableController@edit');


/*Xp*/
Route::get('/Xp', 'XpController@index');

Route::post('/CreateXp', 'XpController@create');

Route::get('/EditXp', 'XpController@edit');


/*User*/
Route::get('/User', 'UserController@index');