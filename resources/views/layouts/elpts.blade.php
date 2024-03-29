<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>
        {{ config('app.name') }}
	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- CSS -->
	@include('includes.css')
	<!-- END CSS -->
</head>
<body>
	<div class="overlay">
		<div class="preloader">
			<img src="{{ config('constants.assets_path') }}/images/preloader.gif">
		</div>
	</div>

	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				@yield('breadcrumbs')
				@yield('content')
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->

	<!-- JS -->
	@include('includes.js')
	<!-- END JS -->
</body>
</html>
