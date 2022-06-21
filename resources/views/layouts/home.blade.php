<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Merupakan website dari Optik Emeral yang menyediakan berbagai macam jenis lensa, softlens, frame kaca mata, dan juga pelayanan terkait kesehatan mata anda. Anda juga dapat memilih kacamata mana yang akan anda beli secara online tanpa harus ke toko kacamata. Sumatera Barat, Bukittinggi">
  <meta name="author" content="Optik Emeral">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Optik Emeral</title>

  <!-- Scripts
  <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Bootstrap core CSS -->
  <link href="{{ url('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ url('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="{{ url('frontend/img/emeral.png')}}" />
  <!-- Custom styles for this template -->
  <link href="{{ url('frontend/css/agency.min.css')}}" rel="stylesheet">

  <!-- Styles
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>

<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  
</body>
</html>
