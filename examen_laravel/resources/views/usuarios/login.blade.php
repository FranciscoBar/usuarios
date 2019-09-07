


<!-- Styles -->
<!-- IMPORTAMOS CSS NATIVOS DE LARAVEL -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


{{-- Incluimos cabeceras--}}
@include('includes.header');

<div class="container">
	<div class="row">
	
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading center-align "> <h1 class="text-primary"> Login </h1> </div>

				<div class="panel-body">
					<form class="form-horizontal" action="{{ action('UsuarioController@iniciaSesion') }}" method="POST">
						{{ csrf_field() }}
                                    
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">Ingresa Correo</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" required placeholder="Ej. ivan@hotmail.com">
								{!! $errors->first('email', '<span class="help-block">:message</span> ') !!}
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-md-4 control-label">Ingresa Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
								{!! $errors->first('password', '<span class="help-block">:message</span> ') !!}
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Ingresar
								</button>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Incluimos footer--}}
@include('includes.footer');
