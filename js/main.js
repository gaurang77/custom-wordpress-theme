let slideOut = document.querySelector("#slide-out");
let searchIcon = document.querySelector("#search-icon");
let menuIcon = document.querySelector("#menu-icon");

menuIcon.addEventListener('click',()=>{
    if(slideOut.style.opacity == 0){
        slideOut.style.opacity = 1;
        slideOut.style.pointerEvents="auto";
    }else if(slideOut.style.opacity == 1){
        slideOut.style.opacity = 0;
        slideOut.style.pointerEvents="none";
    }
     

});