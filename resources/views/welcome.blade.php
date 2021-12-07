<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agrosimbiosis</title>
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('components.main-nav')
        <div style="height:2000px"></div>
        @include('components.footer')
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script src="https://kit.fontawesome.com/c432b96f6c.js" crossorigin="anonymous"></script>
    </body>
</html>
