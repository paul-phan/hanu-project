/**
 * Template Name: Daily Shop
 * Version: 1.1
 * Template Scripts
 * Author: MarkUps
 * Author URI: http://www.markups.io/

 Custom JS


 1. CARTBOX
 2. TOOLTIP
 3. PRODUCT VIEW SLIDER
 4. POPULAR PRODUCT SLIDER (SLICK SLIDER)
 5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
 6. LATEST PRODUCT SLIDER (SLICK SLIDER)
 7. TESTIMONIAL SLIDER (SLICK SLIDER)
 8. CLIENT BRAND SLIDER (SLICK SLIDER)
 9. PRICE SLIDER  (noUiSlider SLIDER)
 10. SCROLL TOP BUTTON
 11. PRELOADER
 12. GRID AND LIST LAYOUT CHANGER
 13. RELATED ITEM SLIDER (SLICK SLIDER)
 14. TOP SLIDER (SLICK SLIDER)


 **/

jQuery(function ($) {


    /* ----------------------------------------------------------- */
    /*  1. CARTBOX
     /* ----------------------------------------------------------- */

    jQuery(".aa-cartbox").hover(function () {
            jQuery(this).find(".aa-cartbox-summary").fadeIn(500);
        }
        , function () {
            jQuery(this).find(".aa-cartbox-summary").fadeOut(500);
        }
    );

    /* ----------------------------------------------------------- */
    /*  2. TOOLTIP
     /* ----------------------------------------------------------- */
    jQuery('[data-toggle="tooltip"]').tooltip();
    jQuery('[data-toggle2="tooltip"]').tooltip();

    /* ----------------------------------------------------------- */
    /*  3. PRODUCT VIEW SLIDER
     /* ----------------------------------------------------------- */

    jQuery('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
        loading_image: 'img/view-slider/loading.gif'
    });

    jQuery('#demo-1 .simpleLens-big-image').simpleLens({
        loading_image: 'img/view-slider/loading.gif'
    });

    /* ----------------------------------------------------------- */
    /*  4. POPULAR PRODUCT SLIDER (SLICK SLIDER)
     /* ----------------------------------------------------------- */

    jQuery('.aa-popular-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    /* ----------------------------------------------------------- */
    /*  5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
     /* ----------------------------------------------------------- */

    jQuery('.aa-featured-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    /* ----------------------------------------------------------- */
    /*  6. LATEST PRODUCT SLIDER (SLICK SLIDER)
     /* ----------------------------------------------------------- */
    jQuery('.aa-latest-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    /* ----------------------------------------------------------- */
    /*  7. TESTIMONIAL SLIDER (SLICK SLIDER)
     /* ----------------------------------------------------------- */

    jQuery('.aa-testimonial-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    /* ----------------------------------------------------------- */
    /*  8. CLIENT BRAND SLIDER (SLICK SLIDER)
     /* ----------------------------------------------------------- */

    jQuery('.aa-client-brand-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    /* ----------------------------------------------------------- */
    /*  9. PRICE SLIDER  (noUiSlider SLIDER)
     /* ----------------------------------------------------------- */

    jQuery(function () {
        if ($('body').is('.productPage')) {
            var skipSlider = document.getElementById('skipstep');
            noUiSlider.create(skipSlider, {
                range: {
                    'min': 0,
                    '10%': 10,
                    '20%': 20,
                    '30%': 30,
                    '40%': 40,
                    '50%': 50,
                    '60%': 60,
                    '70%': 70,
                    '80%': 80,
                    '90%': 90,
                    'max': 100
                },
                snap: true,
                connect: true,
                start: [20, 70]
            });
            // for value print
            var skipValues = [
                document.getElementById('skip-value-lower'),
                document.getElementById('skip-value-upper')
            ];

            skipSlider.noUiSlider.on('update', function (values, handle) {
                skipValues[handle].innerHTML = values[handle];
            });
        }
    });


    /* ----------------------------------------------------------- */
    /*  10. SCROLL TOP BUTTON
     /* ----------------------------------------------------------- */

    //Check to see if the window is top if not then display button

    jQuery(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top

    jQuery('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    /* ----------------------------------------------------------- */
    /*  11. PRELOADER
     /* ----------------------------------------------------------- */

    jQuery(window).load(function () { // makes sure the whole site is loaded
        jQuery('#wpf-loader-two').delay(200).fadeOut('slow'); // will fade out
    })

    /* ----------------------------------------------------------- */
    /*  12. GRID AND LIST LAYOUT CHANGER
     /* ----------------------------------------------------------- */

    jQuery("#list-catg").click(function (e) {
        e.preventDefault(e);
        jQuery(".aa-product-catg").addClass("list");
    });
    jQuery("#grid-catg").click(function (e) {
        e.preventDefault(e);
        jQuery(".aa-product-catg").removeClass("list");
    });


    /* ----------------------------------------------------------- */
    /*  13. RELATED ITEM SLIDER (SLICK SLIDER)
     /* ----------------------------------------------------------- */

    jQuery('.aa-related-item-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    /* ----------------------------------------------------------- */
    /*  14. TOP SLIDER (SLICK SLIDER)
     /* ----------------------------------------------------------- */

    jQuery('.seq-canvas').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    changeImage = function (ev) {
        var img = ev.getAttribute('data-lens-image')
        $('.simpleLens-big-image').attr('src', '/Public/upload/' + img)
        $('.simpleLens-lens-image').attr('data-lens-image', '/Public/upload/' + img)
    }
    $('#quick-view-modal').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            dataType: 'json',
            cache: false,
            type: 'GET',
            url: 'restapi/product/get_by_id/' + id,
            success: function (data) {
                $('#m-title').html(data.data.title);
                if (data.data.sale > 0 && data.data.sale != null) {
                    $('#m-price').html(data.data.sale + '.000 VNĐ')
                } else {
                    $('#m-price').html(data.data.price + '.000 VNĐ')
                }
                if (data.data.count > 0) {
                    $('#m-status').html('<span style="color: green">Còn hàng</span>')
                } else {
                    $('#m-status').html('Hết hàng')
                }
                $('#add-to-cart').attr('data-product-id', data.data.id)
                $('#m-detail').html(data.data.detail)
                $('#m-view').attr("href", 'san-pham/' + data.data.params + '.html')
                $('#m-company').html(data.data.cname)
                if (data.data.iurl != null) {
                    $('.simpleLens-big-image').attr('src', '/Public/upload/' + data.data.iurl)
                    $('.simpleLens-lens-image').attr('data-lens-image', '/Public/upload/' + data.data.iurl)
                } else {
                    $('.simpleLens-big-image').attr('src', "img/view-slider/medium/polo-shirt-1.png")
                    $('.simpleLens-lens-image').attr('data-lens-image', "img/view-slider/medium/polo-shirt-1.png")
                }
                if (data.data.images) {
                    $('.simpleLens-thumbnails-container').empty()
                    data.data.images.forEach(function (e) {
                        $('.simpleLens-thumbnails-container').append('<a href="javascript:;" onclick="changeImage(this);" data-lens-image="' + e.url + '" class="simpleLens-thumbnail-wrapper"> <img width="50px" src="' + '/Public/upload/' + e.url + '"> </a>')
                    });
                } else {
                    $('.simpleLens-thumbnails-container').empty()
                }

            },
            error: function () {
                console.log('error from api')
            }
        });
    });

    $('#add-to-cart').click(function (e) {
        var quantity = $('form #select-quantity').val()
        var id = this.getAttribute('data-product-id')
        $.ajax({
            dataType: 'json',
            cache: false,
            type: 'POST',
            data: {
                'product_id': id,
                'count': quantity
            },
            url: 'restapi/order/add_order/',
            success: function (data) {
                console.log(data)
                $.notific8('Đang cập nhật nhé bạn ^^.', {life: 5000, heading: 'From Minh:'});
            },
            error: function () {
                console.log('error when adding order')
            }
        })

    })

});

