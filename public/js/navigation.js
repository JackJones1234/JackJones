let toggleButton = document.querySelector(".side-menu");
let menu = document.querySelector(".mobile-nav");

// nav menu toggle
toggleButton.addEventListener(
    "click",
    function () {
        if (menu.classList.contains("hide-menu")) {
            console.log("removing hide menu classes");
            menu.classList.remove("hide-menu");
            setTimeout(function () {
                menu.classList.remove("hide-menu-visually");
            }, 20);
        } else {
            menu.classList.add("hide-menu-visually");
            menu.addEventListener(
                "transitionend",
                function (e) {
                    menu.classList.add("hide-menu");
                },
                {
                    capture: false,
                    once: true,
                    passive: false,
                }
            );
        }
    },
    false
);
