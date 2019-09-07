<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class UsuarioController extends Controller
{
    
	public function index(){
	    // SELECT * FROM USUARIOS
		$usuarios = DB::table('usuarios')
			->orderBy('id_usuario', 'desc')
			->limit(1)
			->get();
		
		return view('usuarios.index', [
			'usuarios' => $usuarios
		]);
	}

	public function login(){

		return view('usuarios.login');		
	
	}

	public function iniciaSesion(){

		$valida = $this->validate(request(), [
			'email' => 'email|required|string',
			'password' => 'required|string',
		]);	


			if(Auth::attempts($valida)){
				
				return redirect()->action('UsuarioController@index');	

			}else{
				return back()->withErrors(['enail' => 'Datos incorrectos'])	;
			}

			
			
	}
	public function crearUsuario(){

		$generoUsuario = DB::table('genero')->get();
		$estadoCivil = DB::table('estado_civil')->get();
		$preferencia = DB::table('nivel_interes')->get();

		return view('usuarios.crearUsuario', [
			'generoUsuario' => $generoUsuario, 
			'estadoCivil' => $estadoCivil,
			'preferencia' => $preferencia
		]);
	}

	public function guardarUsuario(Request $request){

/*
		$valida = $this->validate(request(), [
			'nombre' => 'required|string',
			'apellido_paterno' => 'required|string',
			'apellido_materno' => 'required|string',
			'genero' => 'required|string',
			'edad' => 'required|string',
			'estado_civil' => 'required|string',
			'correo' => 'email|required|string',
			'password' => 'required|string'				
		]);

		if($valida){
*/		
			$fruta = DB::table('usuarios')->insert(array(
				'nombre' => $request->input('nombre'),
				'apellido_paterno' => $request->input('apellido_paterno'),
				'apellido_materno' => $request->input('apellido_materno'),
				'genero' => $request->input('genero'),			
				'edad' =>  $request->input('edad'),
				'estado_civil' =>  $request->input('estado_civil'),
				'correo' =>  $request->input('email'),
				'password' =>  md5($request->input('password'))
			)); 
		                             
			return redirect()->action('UsuarioController@index');			
	
//		}else{
//			return 'Error, Datos incompletos';
//		}	
		
	}



}
