@extends('layouts.app')

@section('style')
				{{-- datatable --}}
				{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"/> --}}

				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/datatables.min.css"/>
@endsection

@section('content')
<div class="container">

			@if ( session('message') == 'sinuser' )
			@section('script')
				<script>
					Swal.fire({
						position: 'top-end',
						icon: 'success',
						title: 'No hay registros suficientes',
						showConfirmButton: false,
						timer: 2500
					})
					</script>
				@endsection
			@endif

		<div class="row my-4">
			<h3>admin</h3>
		</div>
    <div class="row justify-content-center">

			<div class="col">
				<div class="card bg-light mb-3" style="max-width: 18rem;">
					<div class="card-header">Concurso</div>
					<div class="card-body">
						<a class="btn btn-success" href="{{ route('user.concurso') }}">Realizar Concurso</a>
	
					</div>
				</div>
			</div>

		<div class="col-12">

			<div class="card">
				<div class="card-header">
					Listado de Usuarios
				</div>
				<div class="card-body">
					<table class="table" id="tableUsers">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Cédula</th>
								<th scope="col">Correo</th>
								<th scope="col">Celular</th>
								<th scope="col">&nbsp;</th>
							</tr>
						</thead>
						{{-- <tbody>
		
						</tbody> --}}
					</table>
				</div>
				<div class="card-footer text-muted">
					{{-- 2 days ago --}}
				</div>
			</div>

 		</div>




    </div>
</div>
@endsection

@section('script')

	{{-- datatable --}}
	{{-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script> --}}

	{{-- buttoo dattable --}}
	{{-- <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> --}}

	 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/datatables.min.js"></script>

	<script>

	$(function () {
			

	var	table = $('#tableUsers').DataTable( {
 
							processing:true,
							serverSide:true,
							responsive: true,
							autoWidth: false,

							dom: 'Bfrtilp',
							buttons: [
								{
									extend: 'excelHtml5',
									text:		'<i class="fas fa-file-excel">Exportar excel</i>',
									titleAttr: 'exportar excel',
									className: 'btn btn-success'
								}
							],
 
 



							language: {
									processing:     "Procesando...",
									search:         "Buscar",
									lengthMenu:    "Mostrar _MENU_ registros",
									info:           "Mostrando de _START_ a _END_  de _TOTAL_ elementos",
									infoEmpty:      "Ningún elemento encontrato",
									infoFiltered:   "(Filtrado de _MAX_ elementos en total)",
									infoPostFix:    "",
									loadingRecords: "Cargando...",
									zeroRecords:    "Nada encontrado...",
									emptyTable:     "Tabla vacía",
									paginate: {
											first:      "Primero",
											previous:   "Anterior",
											next:       "Siguiente",
											last:       "Último"
									}
							},
					 
 
							"ajax":  "/admin/all",
							"columns": [
									{ data: 'id'},
									{ data: 'nombre'},
									{ data: 'apellido'},
									{ data: 'cedula'},
									{ data: 'correo'},
									{ data: 'celular'},
									{ data: 'created_at',},
									
							],

							 
			 
		} );


		

 

 
  
 


	});

	</script>
		
@endsection
