{{-- TODO: implement dropdowns for links --}}
{{-- TODO: recreate for dynamic links --}}
<header>
    <nav>
        <div class="nav-links-left">
            <input class="side-menu" type="checkbox" id="side-menu"/>
            <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
            <a href="../"><img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo"></a>
            <div class="dropdown">
                <a href="" class="test">
                    indoor 
                    <img src="{{ asset('icons/dropdown-button.svg') }}"class="nav-span2">
                </a>
                <div class="dropdown-content">
                    <a href="#">ceiling lamps</a>
                    <a href="#">table lamps</a>
                    <a href="#">floor lamps</a>
                    <a href="#">wall lights</a>
                    <a href="#">bathroom lighting</a>
                    <a href="#">chandeliers</a>
                    <a href="#">smart home lighting</a>
                    <a href="#">proffesional lighting</a>
                    <a href="#">other lighting</a>

                </div>
            </div>
            <div class="dropdown dropdown-middle">
                <a href="" class="test">
                    outdoor 
                    <img src="{{ asset('icons/dropdown-button.svg') }}"class="nav-span2">
                </a>
                <div class="dropdown-content">
                    <a href="#">ceiling lamps</a>
                    <a href="#">recessed sotlights outdoors</a>
                    <a href="#">wall lamps</a>
                    <a href="#">bollard lamps</a>
                    <a href="#">inground lamps</a>
                    <a href="#">floodlight LED</a>
                </div>
            </div>
            <a href="">lookbook</a>
            
        </div>
        <a href="../"><img src="{{ asset('images/logo.svg') }}" alt="logo" class="logo"></a>
        <div class="nav-panel-right">
            <ul>
                <li><a href="#"><img src="{{ asset('icons/search.svg') }}" alt="search"></a></li>
                <li><a href="/cart"><img src="{{ asset('icons/cart_empty.svg') }}" alt="shopping cart"></a></li>
            </ul>
        </div>

    </nav>
    <hr>
</header>
<div class="mobile-nav hide-menu hide-menu-visually">
    <div class="mobile-menu">
        <ul>
            <li><a href="#">indoor<img src="{{ asset('icons/arrow-right.svg') }}" alt="navSpan" class="nav-span"></a></li>
            <li><a href="#">outdoor<img src="{{ asset('icons/arrow-right.svg') }}" alt="navSpan" class="nav-span"></a></li>
            <li><a href="#">lookbook</a></li>
        </ul>
    </div>
</div>

<script src="{{ asset('js/navigation.js')}}"></script>