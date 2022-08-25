@extends('layout.master')

@section('content')

@include('common.title')
@include('common.product')

<script src="{{ asset('js/home/app.js') }}"></script>
{{-- TODO: download --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.babel.js" integrity="sha512-+5apxvskweB7b6gcJurkK+y3O6QNR5XQxP/jt6iJFQ89iW5aTgSy0CiT6rNGH5bs1B+1BPHxwSsRbWpsOF3piA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/navigation.js')}}"></script>

@endsection


