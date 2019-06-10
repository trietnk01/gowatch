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
                margin :0,
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
    jQuery(".owl-carousel-sale-off-on-day").owlCarousel({
        autoplay:true,
        loop:true,
        margin:60,
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            240:{
                margin:0,
                items:1,
            },
            414:{
                margin:30,
                items:2,
            },
            740:{
                margin:40,
                items:2,
            },
            768:{
                margin:35,
            },
            1024:{
                items:4
            }
        }
    });
    jQuery(".owl-carousel-spbc").owlCarousel({
        autoplay:false,
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
    jQuery(".owl-carousel-customer").owlCarousel({
        autoplay:false,
        loop:true,
        margin:50,
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
                margin:0,
                nav:false,
            },
            360:{
                items:2,
                margin:30,
                nav:false,
            },
            374:{
                items:2,
                margin:40,
                nav:false,
            },
            740:{
                items:2,
                margin:70,
            },
            768:{
                items:3,
            }
        }
    });
    jQuery(".owl-carousel-slide").owlCarousel({
        autoplay:false,
        loop:false,
        margin:0,
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
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
    jQuery(".owl-carousel-product-detail-img").owlCarousel({
        autoplay:false,
        loop:true,
        margin:0,
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
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
    jQuery(".owl-carousel-product-thumbnail").owlCarousel({
        autoplay:false,
        loop:true,
        margin:5,
        nav:true,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:4
            }
        }
    });
});