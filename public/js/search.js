const searchLogo = document.querySelector('#search');
const searchForm = document.querySelector('#search-form');
const cancelBtn = document.querySelector('#cancel');

searchLogo.addEventListener('click', function() {
    searchForm.classList.remove("search-form-deactive");
    searchForm.classList.add('search-form-active');
    searchLogo.style.display = "none";
})

cancelBtn.addEventListener('click', function() {
    searchForm.classList.add("search-form-deactive");
    searchForm.classList.remove('search-form-active');
    searchLogo.style.display = "block";
})