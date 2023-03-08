<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>test</title>
  <meta name=description content=""
  "/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>

  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

  <!-- App css -->

  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  @yield('styles')


  @stack('header')

</head>

<body>

<main role="main">
  <div class="col center-container" style="margin-top: 100px;">
    @yield('content')
  </div><!-- /.container -->
</main>

@stack('footer')

</body>
</html>
