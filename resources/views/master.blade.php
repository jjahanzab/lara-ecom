<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Comm</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- boostrap links --}}
	<link rel="stylesheet" href="{{ asset('public/asset/css/bootstrap.css') }}">
	<script src="{{ asset('public/asset/js/jquery.js') }}"></script>
	<script src="{{ asset('public/asset/js/bootstrap.js') }}"></script>
	{{-- custom styling --}}
	<style>
		.custom-login {
			height: 500px;
			padding-top: 100px;
		}
	</style>
</head>
<body>

{{ View::make('header') }}
  @yield('content')
{{ View::make('footer') }}

<script>
$(document).ready(function(){
	// alert('new game');
});
</script>
</body>
</html>