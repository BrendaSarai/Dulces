document.addEventListener('DOMContentLoaded',() =>{

    //Navegacion Menu
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

    //Slider
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {
        indicators: false,
        height: 500,
        duration: 500,
        interval: 3000
    });

    M.Carousel.init($('.carousel'), {
        indicators: true,
        shift: 55,
        dist: 0,
    });

});