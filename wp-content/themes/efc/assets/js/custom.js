const locale = window.location.pathname;
if (locale === '/') {
    var swiper = new Swiper('.presentation', {
        speed: 5000,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
          },
        // autoplay: {
        //     delay: 3800,
        // },    
    });
}else if(locale === '/historia/'){
    var swiper = new Swiper('.swiper-gallery', {
        speed: 5000,
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3800,
        },    
    });
}

let activeSubmenu = null;
function activeSubMenu(menu) {
    const submenu = document.querySelector(`div[onClick="activeSubMenu('${menu}')"] span`);
    
    if (submenu.style.display === 'grid') {
        submenu.style.display = 'none';
        activeSubmenu = null;
    } else {
        if (activeSubmenu) {
            activeSubmenu.style.display = 'none';
        }
        submenu.style.display = 'grid';
        activeSubmenu = submenu; 
    }
}
document.addEventListener('click', function(event) {
    if (activeSubmenu && !activeSubmenu.parentElement.contains(event.target)) {
        activeSubmenu.style.display = 'none'; 
        activeSubmenu = null; 
    }
});

window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
        document.getElementById('header').classList.add('fixedShadow');
    }else{
        document.getElementById('header').classList.remove('fixedShadow');
    }
})
