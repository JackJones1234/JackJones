<!DOCTYPE html>
<html lang="en">
    @include('common.head')
<body>
    @if(Auth::check())
    <button onclick="location.href='/admin/logout'">Logout</button>
    @endif
    @yield('content')
</body>
</html>
