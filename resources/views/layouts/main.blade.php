<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CRUD Laravel</title>
    {{-- icon --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    {{-- font --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    {{-- css --}}
    <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css') }}">

    {{-- Javascript --}}
    <script src="{{URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{URL::asset('assets/js/materialize.min.js') }}"></script>
    <script src="{{URL::asset('assets/js/custom.js') }}"></script>
    <script src="{{URL::asset('assets/js/sweetalert2@8.js') }}"></script>

  </head>
  <body>
    @include('layouts.navbar')
    
    @yield('content')
  </body>
</html>
