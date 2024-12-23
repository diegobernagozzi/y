<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div id="vue-app">
            <main class="">
                @yield('content')
            </main>
        </div>
    </div>

    @if(session()->has('success'))
        <div class="position-fixed bottom-0 end-0 px-4 bg-primary rounded-5 text-light mx-2 my-2">
            <p class="my-3">{{ session('success') }}</p>
        </div>
    @endif

    @include('auth.logout');
</body>

<script>
    window.users = @json($randomUsers);
</script>

</html>
