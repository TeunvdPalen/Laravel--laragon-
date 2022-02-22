<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts/includes/meta')
	<title>Welkom website</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

	<div class="container">
	@include('layouts/includes/header')
	</div>

	<main class="main-content">
		<div class="container">
			<div class="top-content">
				@yield('top-content')
			</div>
			<div class="bottom-content">
				<div>
					@yield('bottom-content-A')
				</div>
				<div>
					@yield('bottom-content-B')
				</div>
			</div>
		</div>
	</main>

	@include('layouts/includes/footer')

</body>
</html>