<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	@vite('resources/css/app.css')
</head>
<body>
	<main>
		@if (session()->has('notice'))
			<div class="text-center bg-red-600 text-red-100">
				{{ session()->get('notice') }}
			</div>	
		@endif
		@yield('main')
	</main>
</body>
</html>