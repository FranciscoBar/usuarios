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


// SE AÑANDE EL PREFIJO (USUARIOS) A TODAS LAS RUTAS DENTRO DE LA FUNCION
Route::group(['prefix' => 'usuarios'], function(){
	Route::get('index', 'UsuarioController@index');
	Route::get('crearUsuario', 'UsuarioController@crearUsuario');	
	Route::get('login', 'UsuarioController@login');	
	Route::get('iniciaSesion', 'UsuarioController@iniciaSesion');		
	Route::post('guardarUsuario', 'UsuarioController@guardarUsuario');	

});

