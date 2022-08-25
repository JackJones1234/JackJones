@extends('layout.admin_master')

@section('content')
<div class="login-wrapper">
    <div class="image-wrapper">
        <img src="{{ asset('images/product/tablelamps/Lamp1.jpeg') }}">
    </div>
    
    <div class="login-form">
        <form action="{{url('/admin/login')}}" method="post">
            @csrf
            <input name="email" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button type="submit">Login</button>
        </form>
    </div>

    <a class="go-home" href="{{url('')}}" aria-label="go to storefront">Go to storefront <img src="{{ asset('icons/arrow-right.svg') }}"></a>
</div>
    @if(session()->has('message'))
    <div>{{ session()->get('message') }}</div>
    @endif
@endsection


