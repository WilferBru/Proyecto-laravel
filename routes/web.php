<?php


Route::view('/', 'home')->name('inicio')->middleware('guest');
Route::view('/formulario-realizado', 'formEcho')->name('formEcho')->middleware('guest');
Route::get('/form', 'projectsController@form')->name('form')->middleware('guest');
Route::post('/form', 'projectsController@create')->name('create')->middleware('guest');
Route::post('/form', 'projectsController@store')->name('store')->middleware('guest');
Route::view('/contenido', 'contenido')->name('contenido')->middleware('guest');


/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@table')->name('table')->middleware('auth');
Route::get('estudiantes-list-excel', 'HomeController@exportExcel')->name('estudiantes.excel')->middleware('auth');
Route::get('estudiantes-list-pdf', 'HomeController@exportPdf')->name('estudiantes.pdf')->middleware('auth');
Route::view('/nuevo-Administrador', 'newAdmin')->name('newAdmin')->middleware('auth');
Route::post('/Administrador-Creado', 'HomeController@create')->name('createAdmin')->middleware('auth');
Route::delete('/home{dato}', 'HomeController@destroy')->name('destroy')->middleware('auth');

