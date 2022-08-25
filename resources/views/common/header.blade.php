{{-- TODO: implement dropdowns for links --}}
{{-- TODO: recreate for dynamic links --}}
<hr>
<div class="nav-wrapper">
    <nav>
        <div class="nav-links-left">
            <input class="side-menu" type="checkbox" id="side-menu"/>
            <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
            <a href="{{ url('') }}"><img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo"></a>
            <div class="dropdown">
                <a href="" class="test">
                    INDOOR 
                    <img src="{{ asset('icons/navSpan.svg') }}"class="nav-span2">
                </a>
                <div class="dropdown-content">
                    <a href="#">CEILING LAMPS</a>
                    <a href="#">TABLE LAMPS</a>
                    <a href="#">FLOOR LAMPS</a>
                    <a href="#">WALL LIGHTS</a>
                    <a href="#">BATHROOM LIGHTING</a>
                    <a href="#">CHANDELIERS</a>
                    <a href="#">CMART HOME LIGHTING</a>
                    <a href="#">PROFESSIONAL LIGHTING</a>
                    <a href="#">OTHER LIGHTING</a>

                </div>
            </div>
            <div class="dropdown dropdown-middle">
                <a href="" class="test">
                    OUTDOOR 
                    <img src="{{ asset('icons/navSpan.svg') }}"class="nav-span2">
                </a>
                <div class="dropdown-content">
                    <a href="#">CEILING LAMPS</a>
                    <a href="#">RECESSED SOTLIGHTS OUTDOORS</a>
                    <a href="#">WALL LAMPS</a>
                    <a href="#">BOLLARD LIGHTING</a>
                    <a href="#">INGROUND LIGHTS</a>
                    <a href="#">FLOODLIGHT LED</a>
                </div>
            </div>
            <a href="">LOOKBOOK</a>
            
        </div>
        <a href="{{ url('') }}"><img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo"></a>
        <div class="nav-panel-right">
            <ul>
                <li><a href="#"><img src="{{ asset('icons/search.svg') }}" alt="search"></a></li>
                <li><a href="#"><img src="{{ asset('icons/cart_empty.svg') }}" alt="shopping cart"></a></li>
            </ul>
        </div>

    </nav>
    <hr>
</div>
<div class="mobile-nav hide-menu hide-menu-visually">
    <div class="mobile-menu">
        <ul>
            <li><a href="#">INDOOR<img src="{{ asset('icons/arrow.svg') }}" alt="navSpan" class="nav-span"></a></li>
            <li><a href="#">OUTDOOR<img src="{{ asset('icons/arrow.svg') }}" alt="navSpan" class="nav-span"></a></li>
            <li><a href="#">LOOKBOOK</a></li>
        </ul>
    </div>
</div>