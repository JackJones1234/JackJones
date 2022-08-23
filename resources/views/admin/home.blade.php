@extends('layout.default')

@section('content')

    <form action="" method="post">
        @csrf
        <input name="email">
        <input name="password" type="password">
        <button type="submit">Login</button>
    </form>

    @push('styles')

    @endpush

@endsection
