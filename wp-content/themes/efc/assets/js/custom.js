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
}
// Swiper gallery
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

// Swiper calendar
    var swiper = new Swiper('.swiper-calendar', {
        speed: 5000,
        loop: true,
        slidesPerView: 2,
        spaceBetween: 80,
        navigation: {
            nextEl: ".swiper-button-next",
        },  
    });

//  Submenu
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

document.querySelectorAll('.header-menu-item').forEach(function(menuItem) {
    menuItem.addEventListener('click', function(event) {
        event.stopPropagation();
        const menu = menuItem.getAttribute('data-menu');
        activeSubMenu(menu);
    });
});

// Fixed menu
window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
        document.getElementById('header-desktop').classList.add('fixedShadow');
    }else{
        document.getElementById('header-desktop').classList.remove('fixedShadow');
    }
})

// Menu pag futebol
function handleTab(selectedTab) {
    const tabs = ['elenco', 'comissao', 'calendario'];
    tabs.forEach(tab => {
        const btn = document.getElementById(`btn-${tab}`);
        const section = document.getElementById(tab);

        if (tab === selectedTab) {
            btn.classList.add('underline');
            section.style.display = 'flex';
        } else {
            btn.classList.remove('underline');
            section.style.display = 'none';
        }
    });
}

// Menu mobile
function toggleMenuMobile() {
    document.getElementById('hamburger').classList.toggle('activeHamburger');
    document.getElementById('navMobile').style.display = (document.getElementById('navMobile').style.display === 'flex' ? 'none' : 'flex');
}