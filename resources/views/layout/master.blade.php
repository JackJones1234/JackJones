<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('common.header')
    <div class="main-container">
        @yield('content')
    </div>
    @include('common.footer')
</body>

{{-- TODO: import from js file --}}
<script>
    // make page span full height if not enough content (footer at bottom)
window.addEventListener("load", () => {
    const mainContainer = document.querySelector(".main-container");
    let navHeight = document
        .querySelector("header")
        .getBoundingClientRect().height;
    let footerHeight = document
        .querySelector("footer")
        .getBoundingClientRect().height;

    mainContainer.style.minHeight = `calc(100vh - ${navHeight}px - ${footerHeight}px)`;
});
</script>

</html>
