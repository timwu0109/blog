<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body>
    <main>
        @if($errors->any())
            <ul class="text-center bg-red-600 text-red-100">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>    
                @endforeach
            </ul>
		@endif
        @yield('main')
    </main>
</body>
</html>