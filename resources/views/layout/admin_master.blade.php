<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    @if(Auth::check())
    <button onclick="location.href='/admin/logout'">Logout</button>
    @endif
    @yield('content')
</body>
</html>
