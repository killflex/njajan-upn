$(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        navText:[
            "<i class='bx bxs-left-arrow-circle' ></i>",
            "<i class='bx bxs-right-arrow-circle' ></i>",
        ],
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
        },
      });

