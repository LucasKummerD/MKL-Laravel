<!doctype html>
	<html lang="en">
	
        @include('layouts.partials.header')

	<body>

		@include('layouts.partials.navbarClient')

		<div class="spacer"></div>
		<div class="spacer"></div>
		
		@yield('content')

		<div class="spacer"></div>
		@include('layouts.partials.footer')

		@include('layouts.partials.scripts')

	</body>
	</html>