<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <div class="admin-master-container">
        @if(Auth::check())
        <button class="button-dark" onclick="location.href='/admin/logout'">Logout</button>
        @endif
        @yield('content')
    </div>
</body>
</html>