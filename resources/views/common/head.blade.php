{{-- <head>
    <!-- push target to head -->
    @stack('styles')
    @stack('scripts')
</head> --}}


<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

{{--    Add this code below to blade component to add style or script file to head

@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush

--}}