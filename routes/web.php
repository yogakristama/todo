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

$controller = function(){
    return view('welcome');
};

Route::get('/', $controller);


route::get('/task',"TaskController@index");

route::get('/task/add',"TaskController@add");

route::post('/task/add',"TaskController@add");

route::get('/task/edit/{task_id}',"TaskController@edit");

route::post('/task/edit/{task_id}',"TaskController@edit");

route::post('/task/delete',"TaskController@delete");

route::get('/media',"MediaController@index");

route::get('/media/upload',"MediaController@upload");

route::post('/media/upload',"MediaController@upload");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
