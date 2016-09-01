<html>
<head>
	<title>appKynou - @yield('title')</title>
</head>
<body>
	<header>
		@section('navbar')
			<p>this is navbar</p>
		@show
		<hr>
	</header>
	<main>
		<div>
			@yield('content')
		</div>
	</main>
	<footer>
		<hr>
		@section('footer')
			@include('layout._includes._footer')
		@show
	</footer>	
</body>
</html>