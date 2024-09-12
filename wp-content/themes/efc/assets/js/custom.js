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
window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
        document.getElementById('header').classList.add('fixedShadow');
    }else{
        document.getElementById('header').classList.remove('fixedShadow');
    }
})
