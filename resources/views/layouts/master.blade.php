<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boolcomics</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  
</head>
<body>
  @include("partials.header")
  <hr>
  @yield('content')
  <hr>
  @include("partials.footer")
</body>
</html>