<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/full.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-poppins.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    <title>{{config('app.name')}} | @yield('title')</title>
</head>
<body>
@if((\Illuminate\Support\Facades\Route::current()->getName() == 'login') == false)
    @include('layouts.navbar')
@endif
<div>
    @yield('content')
</div>
@livewireScripts
</body>
</html>
