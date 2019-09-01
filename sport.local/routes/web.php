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



//Route::resource('/sports', 'SportsController');
//Auth::routes();
Route::get('/sports/login','LoginController@index');
Route::post('/sports/login','LoginController@login');
Route::post('/sports/logout','LoginController@logout');
Route::get('/sports/logout','LoginController@logout');


Route::group(['middleware'=>['Authcheck']], function (){
    Route::get('/sports', 'SportsController@index');
    Route::get('/sports/category', 'SportsController@category');
    Route::get('/sports/{sport}/show', 'SportsController@show');
    Route::post('/sports', 'SportsController@store');
    Route::get('/sports/{sport}/edit', 'SportsController@edit');
    Route::patch('/sports/{sport}', 'SportsController@update');
    Route::delete('/sports/{sport}', 'SportsController@destroy');
});

Route::post('sports/{sports}/matches','SportMatchController@store');
Route::patch('/matches/{match}','SportMatchController@update');

Route::get('/news', 'NewsController@index');
Route::get('/news/{news}', 'NewsController@show');
Route::get('/news_all', 'NewsController@showall');
//Route::get('/aa', 'NewsController@showall');
Route::post('/news/add', 'NewsController@add');
//Route::post('/cart/count', 'NewsController@count');

Route::get('/shops', function () {
    return view('/shops/shop');
});

/*Route::get('/sports', function () {
    return view('sports/js');
});*/
Route::get('/practises', 'PractiseController@practise');
