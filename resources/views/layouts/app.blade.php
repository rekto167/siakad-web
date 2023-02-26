<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/full.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-poppins.css') }}">
    <script src="{{ asset('js/3.2.6.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('assets/cleave.min.js') }}"></script>
    <script src="{{ asset('assets/jquery-3.6.3.js') }}"></script>
    @livewireStyles
    <title>{{ config('app.name') }} | @yield('title')</title>
</head>

<body>
    @if ((\Illuminate\Support\Facades\Route::current()->getName() == 'login') == false)
        @include('layouts.navbar')
        @include('layouts.sidebar')
    @endif
    <div class="z-0">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- <script src="{{ asset('assets/cleave.min.js') }}"></script> --}}
    @livewireScripts
    <script>
        const toggleSidebar = () => {
            let sidebar = document.getElementById('sidebar');
            if (sidebar.classList.contains('hidden')) {
                sidebar.classList.remove('hidden');
            } else {
                sidebar.classList.add('hidden');
            }
        }
    </script>
</body>

</html>
