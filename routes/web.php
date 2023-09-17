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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard','DashboardController@index');
Route::get('profile','ProfileController@index');
Route::get('test','TestController@index');



Route::get('contact','ContactController@index');
Route::post('contactconfirm','ContactconfirmController@store');
Route::get('contactconfirm','ContactconfirmController@index');



Route::get('html','HtmlController@index');
Route::post('htmlconfirm','HtmlconfirmController@store');
Route::get('htmlconfirm','HtmlconfirmController@index');


Route::get('cssfile','CssController@index');
Route::post('cssconfirm','CssconfirmController@store');
Route::get('cssconfirm','CssconfirmController@index');



Route::get('javascript','JavascriptController@index');
Route::post('javascriptconfirm','JavascriptconfirmController@store');
Route::get('javascriptconfirm','JavascriptconfirmController@index');

Route::get('php','PhpController@index');
Route::post('phpconfirm','PhpconfirmController@store');
Route::get('phpconfirm','PhpconfirmController@index');