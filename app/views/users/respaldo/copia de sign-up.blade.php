@extends('layout')

@section('content')

<div>
	<div>
		<div>
			<h1>Sign up</h1>

			{{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

			{{ Field::text('full_name') }}

			{{ Field::email('email') }}

			{{ Field::password('password') }}

			{{ Field::password('password_confirmation', ['placeholder' => 'Repite tu clave']) }}

			<p>
				<input type="submit" value="Register">
			</p>

			{{ Form::close() }}

		</div>
	</div>
</div>

@endsection