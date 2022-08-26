const searchLogo = document.querySelector("#search");
const searchForm = document.querySelector("#search-form");
const searchMobile = document.querySelector(".mobile-search");
const cancelBtn = document.querySelector("#cancel");
const cancelBtnMobile = document.querySelector("#cancelMobile");

searchLogo.addEventListener("click", function () {
    if (window.innerWidth < 600) {
        searchMobile.classList.remove("mobile-search-deactive");
        searchMobile.classList.add("mobile-search-active");
        searchLogo.style.display = "none";
    } else {
        searchForm.classList.remove("search-form-deactive");
        searchForm.classList.add("search-form-active");
        searchLogo.style.display = "none";
    }
});

cancelBtn.addEventListener("click", function () {
    searchForm.classList.add("search-form-deactive");
    searchForm.classList.remove("search-form-active");
    searchLogo.style.display = "block";
});
cancelBtnMobile.addEventListener("click", function () {
    searchMobile.classList.remove("mobile-search-active");
    searchMobile.classList.add("mobile-search-deactive");
    searchLogo.style.display = "block";
});

window.addEventListener("resize", () => {
    if (window.innerWidth < 900) {
        cancelBtn.click();
    }
});

// searchForm.addEventListener('submit', function(e) {
//     e.preventDefault();
//     fetch('/search', {
//         method: 'POST',
//         body: new FormData(searchForm)
//     })
//     .then(response => response.json())
//     .then(data => console.log(data['result']))
//     .catch()
// })
