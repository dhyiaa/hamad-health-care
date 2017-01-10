<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('style/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('style/css-al.css') }}">
    <link rel="SHORTCUT ICON" href="{{ URL::to('img/LOGO120.ico') }}" />
    <script  type="text/javascript" src="{{ URL::to('js/jquery-3.1.1.min.js') }}"></script>
    <script  type="text/javascript" src="{{ URL::to('js/materialize.min.js') }}"></script>
    <script type="text/javascript"  src="{{ URL::to('js/js.js') }}" ></script>
    <script src="https://use.fontawesome.com/39539aebad.js"></script>
    <meta name="Keywords" content="@yield('key-word')">
    <meta name="description" content="@yield('desc')">
  </head>
  <body style="background-color:#d7dadb;">
    @include('al.layout.header')
    <div style="margin-top:90px;">
        @include('cross_lang.logo')
        @yield('content-con')
        @include('al.layout.footer')
    </div>
    </body>
</html>
