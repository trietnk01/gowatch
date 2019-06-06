jQuery(document).ready(function(){
	jQuery(".owl-carousel-banner").owlCarousel({
        autoplay:true,
        loop:true,
        margin:0,
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:true,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            }
        }
    });
    jQuery(".owl-carousel-brand").owlCarousel({
        autoplay:false,
        loop:true,
        margin:100,
        nav:true,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            240:{
                items:1,
                autoplay:true,
                nav:false,
            },
            320:{
                items:2,
                margin:100,
                autoplay:true,
                nav:false,
            },
            740:{
                margin:50,
            },
            768:{
                items:5,
                margin:50,
            },
            1024:{
                items:5,
                margin:80,
            },
            1140:{
                items:5,
                margin:100,
            },
        }
    });
});