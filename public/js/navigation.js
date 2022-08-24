let toggleButton = document.querySelector('.side-menu');
let menu = document = document.querySelector('.mobile-nav');

toggleButton.addEventListener('click', function (){

    if(menu.classList.contains('hide-menu')){
        menu.classList.remove('hide-menu');
        setTimeout(function(){
            menu.classList.remove('hide-menu-visually');
        },20);
    }else{
        menu.classList.add('hide-menu-visually');
        menu.addEventListener('transitionend', function(e){
            menu.classList.add('hide-menu')
        }, {
            capture: false,
            once: true,
            passive: false
        });
    }
},false);
