<!DOCTYPE html>
<html lang="en">

@include('layouts.includes.meta')

<body>

	@include('layouts.includes.header')

	@include('layouts.includes.subheader')

	<section class="main-container container">
		@yield('content')
	</section>

	@include('layouts.includes.footer')

</body>

</html>
