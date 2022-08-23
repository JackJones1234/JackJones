<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @stack('styles')
</head>

<body>
    @include('common.header')

    @yield('content')

    @include('common.footer')

    @stack('scripts')
</body>
</html>