<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Archery Team Score')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/0cfa46bb00.js" crossorigin="anonymous"></script>
</head>

<body class="ml-6 mr-6">
    <header>
        <div class="float-right"><a href="{{ url('/') }}"><img
                    src="{{ config('app.url') }}:8000/storage/img/logo180.png" alt="logo" /></a></div>
        <h1 class="text-4xl mt-6 text-lime-800"><a href="{{ url('/') }}">Archery Team Score</a></h1>
        <p class="mb-16 mt-2 text-xs">By Titu</p>
        <hr class="mb-6 text-lime-800" />
    </header>

    <div class="p-8">
        @yield('content')
    </div>
</body>

</html>
