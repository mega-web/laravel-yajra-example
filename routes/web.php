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

Route::get('table-1', 'DatatablesController@index');

Route::get('anydata', 'DatatablesController@anyData')->name('anydata');


//just for redirect table-2
Route::get('table-2', function () {
    return redirect('crud');
});

Route::resource('crud','CrudController');