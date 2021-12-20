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
        <div id="hero">
            <div class="overlay">
                <div class="container-fluid">
                    <div class="row align-items-end pt-5 pb-5">
                        <div class="col-9 mx-auto text-center">
                            <h1 class="text-white display-2">Agrosimbiosis</h1>
                            <h2 class="text-white fw-light">
                              Cosechando Ciclos
                            </h2>
                            <p>
                                <a id="hero-cta" href="#" class="btn btn-primary text-white text-uppercase py-2 px-4">
                                    Conocenos
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.footer')
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script src="https://kit.fontawesome.com/c432b96f6c.js" crossorigin="anonymous"></script>
    </body>
</html>
