const locale = window.location.pathname;
if (locale === '/') {
}
window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
        document.getElementById('header').classList.add('fixedShadow');
    }else{
        document.getElementById('header').classList.remove('fixedShadow');
    }
})
