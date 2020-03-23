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

Route::get('/front', [
    'uses' =>'FrontEendController@index',
    'as'   =>'index'
]);
    



Route::resource('category-crud', 'CategoryController');

Route::post('category-crud/update', 'CategoryController@update')->name('category-crud.update');

Route::get('category-crud/destroy/{id}', 'CategoryController@destroy');


Route::resource('ajax-crud', 'AjaxCrudController');

Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');

Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy');


Auth::routes();


Route::get('/dashboard', [
    'uses' => 'HomeController@index',
    'as' => 'dashboard'
]);



    
    
