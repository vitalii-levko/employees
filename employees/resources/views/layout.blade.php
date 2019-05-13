<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Main')</title>
</head>
<body>
	<ul>
		<li><a href="/">Home</a></li>
		@if (auth()->check())
		<li><a href="/details">Details</a></li>
		@endif
		<li><a href="/companies">Companies</a></li>
		<li><a href="/login">Authentication</a></li>
	</ul>
	@yield('content')
</body>
</html>
