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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//
//
//    return view('step1');
//});
Route::get('/','Step1Controller@index');
Route::get('/step2','Step2Controller@index');
Route::post('/step2', function ($res) {
//    echo 'sdfsd';exit;
//    return view('step2')->with('res',$res);
});
Route::get('ajaxImageUpload', ['uses'=>'AjaxImageUploadController@ajaxImageUpload']);

Route::post('ajaxImageUpload', ['as'=>'ajaxImageUpload','uses'=>'AjaxImageUploadController@ajaxImageUploadPost']);
Route::resource('step1', 'Step1Controller');
Route::resource('step2', 'Step2Controller');
Route::post('/step1/create', 'Step1Controller@create');
//Route::post('step1/edit', 'Step1Controller@edit');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
