<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Sekolah</title>

  <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">

</head>

<body>
  @include('_layout._header')

  @yield('main-content')

  @include('_layout._footer')

  <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>

</html>
