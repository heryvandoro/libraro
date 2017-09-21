$(document).ready(()=>{
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
    });
    setInterval(()=>{
        $('.carousel').carousel('next');
    }, 4000);
})