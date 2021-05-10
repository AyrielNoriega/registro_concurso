
@extends('layouts.app')

@section('style')
				{{-- datatable --}}
				{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"/> --}}

				{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/datatables.min.css"/> --}}
@endsection

@section('content')

<div class="container">
	


<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">username</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="contrasena">Password</label>
      <input type="password" class="form-control" id="contrasena" name="contrasena">
    </div>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>

</div>

@endsection