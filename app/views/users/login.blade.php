@extends('layout')

@section('content')

<div>
	<div>
		<div>
			<h1>Iniciar Sección</h1>

			{{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', '']) }}
			@if (Session::has('login_error'))
				<span>Usuario o Contraseña Invalida</span>
			@endif
			<div>
				{{ Form::label('username', 'Nombre de usuario') }}
				{{ Form::text('username', null, ['class' => 'agregar_class', 'required' => '']) }}
				{{ $errors->first('username','<p class="error_message">:message</p>') }}
			</div>
			
			<div>
				{{ Form::label('password', 'Escribe tu contraseña') }}
				{{ Form::password('password', ['required' => '']) }}
				{{ $errors->first('password') }}
			</div>

			<p>
				<input type="submit" value="Register">
			</p>

			{{ Form::close() }}

		</div>
	</div>
</div>

@endsection