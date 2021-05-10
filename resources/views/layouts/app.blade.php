<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- CSRF Token -->
			<meta name="csrf-token" content="{{ csrf_token() }}">

			<title>{{ config('app.name', 'Laravel') }}</title>

			{{-- Fonts --}}


	    <!-- Styles -->
			<link href="{{ asset('css/app.css') }}" rel="stylesheet">
			{{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

			@yield('style')
</head>
<body>

	<div id="app">
      
		<main class="">
				@yield('content')
		</main>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>

	@yield('script')
	
</body>
</html>