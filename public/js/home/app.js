function openProduct(event) {
    const id = event.dataset.id;
    location.replace("http://127.0.0.1:8000/product/" + id);
}

// animations ****************************************************

// appear on scroll
const products = document.querySelectorAll(".product-card");

window.addEventListener("load", showOnScroll);
window.addEventListener("scroll", showOnScroll);
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

// tilt effect
products.forEach((e) => {
    e.setAttribute("data-tilt", "");
    e.setAttribute("data-tilt-speed", "5000");
});

// ***************************************************************
