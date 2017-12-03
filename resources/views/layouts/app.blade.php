<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      body{
        background-color: #fcf7f7;
      }
    </style>
</head>
<body>
    <div id="app">

              <div class="alert alert-success" role="alert">
                      <h3 class="alert-link">Admin Yönetici Paneline Giriş Sayfasına Hoşgeldiniz</h1>
                        <a href="{{ route('admanasayfa') }}"><b>Panele Git</b></a>
              </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
