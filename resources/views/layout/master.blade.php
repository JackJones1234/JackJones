<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="main-container">
        @include('common.header')
        @yield('content')
        @include('common.footer')
    </div>
</body>
</html>
