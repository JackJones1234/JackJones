let menuIcon = document.querySelector(".side-menu");
let mobielNav = document.querySelector(".mobile-nav");
// mobielNav.style.display="none";
menuIcon.onclick = function(){
    if(mobielNav.style.display === "none"){
        mobielNav.style.display="initial";
    }else{
        mobielNav.style.display="none";
    }
}