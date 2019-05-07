<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
