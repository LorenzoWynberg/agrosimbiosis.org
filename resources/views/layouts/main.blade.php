<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
  <head>
    @yield('meta')
    <meta charset="utf-8">
    <title>@yield('title') - Agrosimbiosis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
  </head>
  <body id="@yield('id')">
    <div id="wrapper">
      @yield('content')
    </div>
    @include('components.modals.donations')
    @include('components.footer')
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/c432b96f6c.js" crossorigin="anonymous"></script>
    @yield('scripts')
  </body>
</html>
