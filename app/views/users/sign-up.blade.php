@extends('layout')

@section('content')

<div>
	<div>
		<div>
			<h1>Sign up</h1>

			{{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', '']) }}
			<div>
				{{ Form::label('username', 'Nombre de usuario') }}
				{{ Form::text('username', 'holaa', ['class' => 'agregar_class', 'required' => '']) }}
				{{ $errors->first('username','<p class="error_message">:message</p>') }}
			</div>
			
			<div>
				{{ Form::label('full_name', 'Nombre Completo') }}
				{{ Form::text('full_name', 'Agrega valores al campo', ['class' => 'agregar_class', 'required' => '']) }}
				{{ $errors->first('full_name') }}
			</div>
			
			<div>
				{{ Form::label('email', 'Correo Electronico') }}
				{{ Form::email('email', null, ['class' => 'agregar_class', 'required' => '']) }}
				{{ $errors->first('email') }}
			</div>
			
			<div>
				{{ Form::label('password', 'Escribe tu contraseña') }}
				{{ Form::password('password', ['required' => '']) }}
				{{ $errors->first('password') }}
			</div>
			
			<div>
				{{ Form::label('password_confirmation', 'Repite tu contraseña') }}
				{{ Form::password('password_confirmation', ['placeholder' => 'Repite tu contraseña', 'required' => '']) }}
				{{ $errors->first('password_confirmation') }}
			</div>

			<p>
				<input type="submit" value="Register">
			</p>

			{{ Form::close() }}

		</div>
	</div>
</div>

@endsection