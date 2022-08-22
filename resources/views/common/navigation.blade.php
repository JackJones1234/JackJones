{{-- TODO: implement dropdowns for links --}}
{{-- TODO: recreate for dynamic links --}}
<nav> 
    <div class="nav-links-left">
        <img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo">
        <ul>
            <li><a href="#">Bags<img src="{{ asset('icons/navSpan.svg') }}" alt="navSpan" class="nav-span"></a></li>
            <li><a href="#">Shoes<img src="{{ asset('icons/navSpan.svg') }}" alt="navSpan" class="nav-span"></a></li>
            <li><a href="#">Lookbook</a></li>
        </ul>
    </div>

    <div class="nav-panel-right">
        <ul>
            <li><a href="#"><img src="{{ asset('icons/search.svg') }}" alt="search"></a></li>
            <li><a href="#"><img src="{{ asset('icons/person.svg') }}" alt="user"></a></li>
            <li><a href="#"><img src="{{ asset('icons/cart_empty.svg') }}" alt="shopping cart"></a></li>
        </ul>
    </div>
</nav>