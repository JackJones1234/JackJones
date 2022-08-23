<!DOCTYPE html>
<html lang="en">
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