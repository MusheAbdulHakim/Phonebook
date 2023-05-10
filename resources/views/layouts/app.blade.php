<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ucwords(config('app.name','Phone Book App'))}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="row">
        <div class="d-flex align-items-center justify-content-center">
            <h1><i class="fas fa-address-book"></i> {{ucwords(config('app.name', 'Phone Book App'))}}</h1>
        </div>
    </div>
    @yield('content')
    @livewireScripts
</body>
</html>
