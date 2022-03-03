<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
<div class="container-fluid">
   <header class="row">
       @include('layouts.header')
   </header>
   <div id="main" class="row">
           @yield('content')

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>