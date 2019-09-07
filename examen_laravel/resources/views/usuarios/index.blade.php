

<!-- Styles -->
<!-- IMPORTAMOS CSS NATIVOS DE LARAVEL -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


{{-- Incluimos cabeceras--}}
@include('includes.header');


	<div class="container">
		<div class="row">		
			<div class="col-md-12">

				<h1> Bienvenido : 

					@foreach($usuarios as $usuario)					
						{{ $usuario->nombre }}
					@endforeach

				</h1>
				<div class="row">
					<div class="col-md-4">
						<a href="{{ action('UsuarioController@crearUsuario') }}">
							<button class="form-control btn btn-primary btn-block" value="Logout">Logout</button>
						</a>
					</div>
				</div>	
			</div>
		</div>		
	</div>

{{-- Incluimos footer--}}
@include('includes.footer');

