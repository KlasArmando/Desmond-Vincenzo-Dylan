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
    $fullname = "index";
    return view('index', compact('fullname'));
});


route::get('/userdyl', 'UserdylController@index');

Route::get('registratie', 'registratie@contact.nl');
Route::post('registratie', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
