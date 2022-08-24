<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <form action="{{url('/admin/login')}}" method="post">
            @csrf
            <input name="email" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button type="submit">Login</button>
        </form>
    </div>
    <a href="{{url('')}}" aria-label="go to storefront">Go to storefront</a>
</div>
    @if(session()->has('message'))
    <div>{{ session()->get('message') }}</div>
    @endif
    @if(Auth::check())
        <a href="{{ url('admin/login-out') }}">Logout page</a>
        <a href="{{ url('admin/dashboard') }}">Dashboard page</a>
    @endif
</body>
</html>