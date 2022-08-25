<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('common.header')
    <div class="main-container">
        @yield('content')
        @include('common.footer')
    </div>
</body>
</html>
