<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Stellar by HTML5 UP</title>
		@include('layouts/includes/meta')
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        @include('layouts/includes/header')

        <!-- Nav -->
        @include('layouts/includes/nav')

        <!-- Main -->
        <div id="main">

        @yield('main-content')

        </div>

        <!-- Footer -->
        <footer id="footer">
        @include('layouts/includes/footer')
        </footer>

    </div>

    <!-- Scripts -->
    @include('layouts/includes/scripts')

</body>

</html>