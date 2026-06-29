<!DOCTYPE html>
<html lang="en">

<head>

    @include('layout.Partials.head')
    @include('layout.Partials.css')

    @stack('styles')

</head>

<body>

    <!-- Header/Navbar -->
    @include('layout.Partials.header')

     <!-- Preloader Start -->
    {{-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div> --}}
    <!-- Preloader End -->

    
    <!-- Page Content -->
    @yield('content')


    <!-- Footer -->
    @include('layout.Partials.footer')


    <!-- Javascript -->
    @include('layout.Partials.js')

    @stack('scripts')

</body>

</html>
