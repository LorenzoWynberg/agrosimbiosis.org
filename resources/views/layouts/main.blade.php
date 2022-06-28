<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">

<head>
	@yield('meta')
	<meta charset="utf-8">
	<title>@yield('title') - Agrosimbiosis</title>
	<link rel="icon" type="image/png" href="/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>

<body id="@yield('id')">
	<div id="wrapper">
		@yield('content')
	</div>
	@include('components.modals.donations', ['tokens' => ['BTC'=>'BTC','ETH'=>'ETH','BNB'=>'BSC']])
	@include('components.footer')
	<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
	<script src="https://kit.fontawesome.com/721bcd191b.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ mix('js/external-links.js') }}"></script>
	@yield('scripts')
</body>

</html>