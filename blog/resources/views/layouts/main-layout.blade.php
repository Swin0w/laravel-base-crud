<!DOCTYPE html>
<html lang="it-IT" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- GOOGLE FONT - MUKTA -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
  </body>
</html>