@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row pt-4 justify-content-between">
 
			<h3 class="ml-3">Registro al concurso</h3>
 

			{{-- <a class="ml-3" href="{{ route('user.index') }}">Ingresar</a> --}}
 
	</div>
    <div class="row justify-content-center contenido">

			@if ( session('message') == 'ok' )
					@section('script')
						<script>
							Swal.fire({
								position: 'top-end',
								icon: 'success',
								title: 'Registrado correctamente!',
								showConfirmButton: false,
								timer: 2500
							})
						</script>
					@endsection
			@endif

        <div class="col-md-10 col-lg-10 content-img">
                {{-- <img class="img-login " src="{{ asset('images/login.png') }}" alt="login image"> --}}

								<form method="POST" action="{{ route('user.store') }}">
									@csrf
									<div class="form-row">
										<div class="form-group col-md-4">
											<label for="nombre">Nombre</label>
											<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
											@error('nombre')
													<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group col-md-4">
											<label for="apellido">Apellido</label>
											<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}">
											@error('apellido')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group col-md-4">
											<label for="cedula">Cédula</label>
											<input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cédula" value="{{ old('cedula') }}">
											@error('cedula')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>

									<div class="form-row">

										<div class="form-group col-md-4">
											<label for="celular">Celular</label>
											<input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular" autocomplete="tel" value="{{ old('celular') }}">
											@error('celular')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group col-md-4">
											<label for="correo">Correo</label>
											<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" autocomplete="email" value="{{ old('correo') }}">
											@error('correo')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
		
									</div>
			 
	 
									<div class="form-row">
										<div class="form-group col-md-4">
											<label for="departamento">Departamento</label>
											<select id="departamento"  class="form-control" name="departamento_id" >
													<option value=""  selected>-- Seleccionar Departamento --</option>
														@foreach ($dep as $departamento)
														<option  value="{{ $departamento->id }}">{{ $departamento->departamento }}</option>
															
														@endforeach
											</select>
											@error('departamento_id')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group col-md-4">
											<label for="ciudad">Ciudad</label>
											<select id="ciudad" class="form-control" name="ciudad_id" >
												<option value=""  selected>-- Seleccionar Ciudad --</option>

											</select>
											@error('ciudad_id')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
			
									</div>
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="habeas_data" name="habeas_data" value="1" value="{{ old('habeas_data') }}">
											<label class="form-check-label" for="habeas_data">
												Habeas data
											</label>
											@error('habeas_data')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<button type="submit" class="btn btn-primary">Registrarse</button>
								</form>
        </div>

    </div>
</div>
@endsection
 
@section('script')

<script>

	$("#departamento").change(function (event) {

		console.log(event.target.value);
		
	
		$.get("/all/", { id: event.target.value} , function (response, state) {
			console.log('res ',  response.ciudad);

			$('.borrar').remove();

			response.forEach(element => {
				$('#ciudad').append(`<option value="${element.id} " class="borrar"> ${element.ciudad} </option>`);
			});
		})
			.done(function(data) {
				console.log('done', data );
			})
			.fail(function(errr) {
				console.log('error ', errr );
			})

	});

</script>

	
@endsection  
