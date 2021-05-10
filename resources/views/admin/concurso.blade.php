@extends('layouts.app')

 
@section('content')

<div class="container">

	
	<div class="jumbotron mt-5">
		<h1 class="display-4">El Ganador es:</h1>
		<hr class="my-4">

		<p class="lead">Nombre: <span class="text-uppercase"> {{ $userSelect->nombre }} </span></p>
		<p class="lead">Apellido: <span class="text-uppercase"> {{ $userSelect->apellido }} </span></p>
		<p class="lead">Cédula: {{ $userSelect->cedula }}</p>
		<p class="lead">Celular : {{ $userSelect->celular }}</p>
		<p class="lead">Correo : {{ $userSelect->correo }}</p>
		<p class="lead">Departamento  : <span class="text-uppercase"> {{ $userSelect->departamento->departamento }}</span></p>
		<p class="lead">Ciudad  : <span class="text-uppercase"> {{ $userSelect->ciudad->ciudad }} </span></p>

		<hr class="my-4">
		<a class="btn btn-primary btn-lg" href="{{ route('user.admin') }}" role="button">Regresar</a>
	</div>
	
</div>

@endsection