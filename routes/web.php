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


// Admin group


Route::group(['prefix' => 'admin', 'midleware' => 'admin'], function(){
    CRUD::resource('costumer', 'Admin\CostumerCrudController');
});


// Pages routes
    Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
         ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);



// Article group

Route::group(['prefix' => 'admin', 'midleware' => 'admin'], function(){
    CRUD::resource('article', 'Admin\ArticleCrudController');
});

