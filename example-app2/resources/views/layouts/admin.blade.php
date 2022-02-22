<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts/includes/meta')
	<title>Welkom website</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

	<div class="container">
		<div class="layout">
			<div class="aside">
			@yield('aside')
			</div>
			<div class="main">
			@yield('main')
			</div>
		</div>
	</div>


</body>
</html>