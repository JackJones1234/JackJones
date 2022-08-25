@extends('layout.master')

@section('content')

@include('common.title')
@include('common.product')

<script src="{{ asset('js/home/app.js') }}"></script>
{{-- TODO: download --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.babel.js" integrity="sha512-+5apxvskweB7b6gcJurkK+y3O6QNR5XQxP/jt6iJFQ89iW5aTgSy0CiT6rNGH5bs1B+1BPHxwSsRbWpsOF3piA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- appear on scroll --}}
<script>
    const products = document.querySelectorAll(".product-card");

    window.addEventListener("load", showOnScroll);
    window.addEventListener("scroll", showOnScroll);
    window.addEventListener("resize", showOnScroll);

    function showOnScroll() {
        let screenPos = window.innerHeight;
        for (let i = 0; i < products.length; i++) {
            let imgPos = products[i].getBoundingClientRect().top;
            if (imgPos < screenPos) {
                products[i].classList.add("appear");
            } else {
                products[i].classList.remove("appear"); // optional
            }
        }
    }
</script>

@endsection


