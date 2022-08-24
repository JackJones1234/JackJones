{{-- TODO: implement dropdowns for links --}}
{{-- TODO: recreate for dynamic links --}}
<hr>
<nav>
    <div class="nav-links-left">
        <input class="side-menu" type="checkbox" id="side-menu"/>
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
        <img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo">
        <ul>
            <li><a href="#">Bags<img src="{{ asset('icons/navSpan.svg') }}" alt="navSpan2" class="nav-span2"></a></li>
            <li><a href="#">Shoes<img src="{{ asset('icons/navSpan.svg') }}" alt="navSpan2" class="nav-span2"></a></li>
            <li><a href="#">Lookbook</a></li>
        </ul>
        
    </div>
    <img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo">
    <div class="nav-panel-right">
        <ul>
            <li><a href="#"><img src="{{ asset('icons/search.svg') }}" alt="search"></a></li>
            <li><a href="#"><img src="{{ asset('icons/person.svg') }}" alt="user"></a></li>
            <li><a href="#"><img src="{{ asset('icons/cart_empty.svg') }}" alt="shopping cart"></a></li>
        </ul>
    </div>
</nav>
<hr>
<div class="mobile-nav">
    <div class="mobile-menu">
        <ul>
            <li><a href="#">Bags<img src="{{ asset('icons/arrow.svg') }}" alt="navSpan" class="nav-span"></a></li>
            <li><a href="#">Shoes<img src="{{ asset('icons/arrow.svg') }}" alt="navSpan" class="nav-span"></a></li>
            <li><a href="#">Lookbook</a></li>
        </ul>
    </div>
    <div class="mobile-footer">
        <a href="#">
            <img src="{{ asset('icons/person.svg') }}" alt="user">
            Log in
        </a>
    </div>
    
</div>