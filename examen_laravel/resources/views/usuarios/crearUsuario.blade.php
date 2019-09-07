


<!-- Styles -->
<!-- IMPORTAMOS CSS NATIVOS DE LARAVEL -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


{{-- Incluimos cabeceras--}}
@include('includes.header');

<div class="container">

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"> <h1 class="text-primary"> Registro </h1> </div>
				<div class="panel-body">
	
				<form class="form-horizontal" action="{{ action('UsuarioController@guardarUsuario') }}" method="POST">
					{{-- Agregrams csrf_field() para evitar ataques CSRF --}}
					{{ csrf_field() }}
						
						<div class="row">
							<div class="col-md-12">	
								<div class="form-group{{ $errors->has('nombre') ? 'has-error' : '' }}" >
									<label for="nombre" class="col-md-12 control-label">Nombre</label>
									<input type="text" class="form-control" name="nombre">  
									{!! $errors->first('nombre', '<span class="help-block">:message</span> ') !!}
								</div>
							</div>
						</div>    	
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('apellido_paterno') ? ' has-error' : '' }}">
									<label for="apellido_paterno" class="col-md-6 control-label">Apellido paterno</label>
									<input type="text" class="form-control" name="apellido_paterno" >  
									{!! $errors->first('apellido_paterno', '<span class="help-block">:message</span> ') !!}
								</div>
							</div>	                        
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('apellido_paterno') ? ' has-error' : '' }}">
									<label for="apellido_materno" class="col-md-6 control-label">Apellido Materno</label>
									<input  type="text" class="form-control" name="apellido_materno" >
									{!! $errors->first('apellido_materno', '<span class="help-block">:message</span> ') !!}  
								</div>
							</div>
						</div>

						<div class="row">

							<div class="col-md-4">
								<div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
									<label for="email" class="col-md-6 control-label">Genero</label>
									<select class="form-control" name="genero">
										<option selected="true" disabled="disabled">-- Selecciona --</option>	
										@foreach($generoUsuario as $genero)					
											<option>{{ $genero->nombreGenero }}</option>
										@endforeach
									</select>
									{!! $errors->first('genero', '<span class="help-block">:message</span> ') !!}
								</div>
							</div>	
							<div class="col-md-4">
								<div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
									<label for="edad" class="col-md-6 control-label">Edad</label>
									<input  type="number" class="form-control" name="edad" >  
									{!! $errors->first('edad', '<span class="help-block">:message</span> ') !!}
								</div>
							</div>	                                   		
							<div class="col-md-4">
								<div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">
									<label for="estado_civil" class="col-md-6 control-label">Estado Civil</label>
									<select class="form-control" name="estado_civil">
										<option selected="true" disabled="disabled">-- Selecciona --</option>
										@foreach($estadoCivil as $edoCivil)					
											<option>{{ $edoCivil->nombreEstadoCivil }}</option>
										@endforeach
									</select>
									{!! $errors->first('estado_civil', '<span class="help-block">:message</span> ') !!}
								</div>
							</div>	                        
						</div>

						<div class="row">
							<div class="col-md-6">	
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email" class="col-md-12 control-label">Email</label>
									<input type="email" class="form-control" name="email" placeholder="Ej. usuario@hotmail.com" >
									{!! $errors->first('email', '<span class="help-block">:message</span> ') !!}  
								</div>
							</div>
							<div class="col-md-6">	
								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label for="password" class="col-md-12 control-label">Contraseña</label>
									<input type="password" class="form-control" name="password" >
									{!! $errors->first('password', '<span class="help-block">:message</span> ') !!}  
								</div>
							</div>
						</div>    	

						<div class="row">
							<div class="col-md-6">	
								<div class="form-group{{ $errors->has('interes') ? ' has-error' : '' }}">
									<label for="interes" class="col-md-12 control-label">Nivel de Interes</label>
									<select class="form-control" name="interes">
										<option selected="true" disabled="disabled">-- Selecciona --</option>
										@foreach($preferencia as $interes)					
											<option>{{ $interes->nombrePreferencia }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-6">	
								<div class="form-group{{ $errors->has('preferencia') ? ' has-error' : '' }}">
									<label for="preferencia" class="col-md-12 control-label">Preferencia</label>
									<select class="form-control" name="preferencia">
										<option selected="true" disabled="disabled">-- Selecciona --</option>
										@foreach($preferencia as $interes)					
											<option>{{ $interes->nombrePreferencia }}</option>
										@endforeach
									</select>
								</div>
							</div>		
						</div>	    	                        

						<div class="row">
							<div class="col-md-12">	
								<div class="form-group">
									<input class="form-control btn btn-primary btn-block" type="submit" value="Guardar" />  
								</div>
							</div>
						</div>    	

					</form>
				</div>		<!-- .panel-body-->
			</div>			<!-- .panel panel-default-->
		</div>				<!-- .col-md-12 col-md-offset-2-->
	</div> 					<!-- .row-->	
</div>						<!-- .Container-->

{{-- Incluimos footer--}}
@include('includes.footer');
