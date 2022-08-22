{{-- TODO: implement dropdowns for links --}}
{{-- TODO: recreate for dynamic links --}}
<header>
    <nav>
        <div class="logo">
            <img src="{{ asset('images/logo.svg') }}" alt="logo">
        </div>

        <div class="nav-links">
            <ul>
                <li><a href="#">Bags</a></li>
                <li><a href="#">Shoes</a></li>
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
</header>