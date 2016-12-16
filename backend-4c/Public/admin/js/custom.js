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
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        infinite: true,
        speed: 800,
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
                    $('#m-price').html(viNumFormat(data.data.sale) + '.000 VNĐ')
                } else {
                    $('#m-price').html(viNumFormat(data.data.price) + '.000 VNĐ')
                }
                if (data.data.count > 0) {
                    $('#m-status').html('<span style="color: green">Còn hàng</span>')
                } else {
                    $('#m-status').html('Hết hàng')
                }
                $('#add-to-cart-in').attr('data-product-id', data.data.id)
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
                $.notific8('Xảy ra lỗi khi tải dữ liệu sản phẩm.', {life: 5000, heading: 'From Minh:'});
            }
        });
    });

    $('#add-to-cart-in, .aa-add-card-btn').click(function (e) {
        var quantity = 1
        if (e.target.id == 'add-to-cart-in') {
            quantity = $('form #select-quantity').val()
        }
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
                updateCart();
                $.notific8('Đã thêm +' + quantity + ' sản phẩm vào giỏ hàng!', {
                    life: 5000,
                    heading: 'From Minh:'
                });
            },
            error: function (er) {
                console.log(er)
                $.notific8('Xảy ra lỗi khi thêm sản phẩm vào giỏ.', {life: 5000, heading: 'From Minh:'});
            }
        })
    })

    function updateCart() {
        $.ajax({
            cache: false,
            type: 'GET',
            url: 'restapi/order/retrieve/',
            success: function (data) {
                var money = 0;
                $('#cart-noti').empty()
                q = 0;
                $.each(data.data, function (i, e) {
                    q++;
                    $('#cart-noti').append('<li> <a class="aa-cartbox-img" href="gio-hang.html"><img src="Public/upload/' + e.url + '" alt="' + e.label + '"></a><div class="aa-cartbox-info"> <h4><a href="san-pham/' + e.params + '.html">' + e.title + '</a></h4> <p>' + e.order_count + ' x ' + viNumFormat(e.real_price) + '.000 VNĐ</p> </div> <a class="aa-remove-product" href="/order/update_cart/' + e.id + '"><span class="fa fa-times"></span></a> </li>')
                    money += (e.order_count * e.real_price);
                })
                $('.aa-cartbox-total-price').html(viNumFormat(money) + '.000 VNĐ')
                $('.aa-cart-notify').html(q);
            },
            error: function (e) {
                console.error(e);
            }
        })
    }

    updateCart();

    //SEARCHING PRODUCT
    jQuery("#search-product").keyup(function () {

            var keyword = $(this).val()
            if (keyword.length > 1) {
                $.ajax({
                    type: "GET",
                    url: "restapi/product/search?product=" + keyword,
                    beforeSend: function () {
                        $('input#search-product').addClass('loading');
                    },
                    success: function (data) {
                        $(".aa-search-box-result").fadeIn(500);
                        $('body').click(function (e) {
                            $(".aa-search-box-result").fadeOut(500);
                        })
                        $('.aa-search-box-result, .aa-search-box').click(function (event) {
                            $(".aa-search-box-result").fadeIn(500);
                            event.stopPropagation();
                        });
                        console.log(data.data)
                        $('#search-result').empty()
                        $.each(data.data, function (i, e) {
                            if (e.url == null) {
                                e.url = 'updatelater.jpg'
                            }
                            $('#search-result').append('<li style="clear: both; display: block"><a  href="san-pham/' + e.params + '.html"> <span style="float: left"><img width="50px" src="Public/upload/' + e.url + '" alt="' + e.label + '"></span> <span> <h4>' + e.title + '</h4> <p>' + viNumFormat(e.price) + '.000 VNĐ</p> </span></a> </li> ')
                        })
                        if (Object.keys(data.data).length == 0) {
                            $('#search-result-title').html(' Không tìm thấy kết quả nào với từ khóa: ' + keyword)
                        } else {
                            $('#search-result-title').html(' Kết quả tìm kiếm với từ khóa: ' + keyword);
                        }
                    }
                })
            }
        }
    );
    $(document).ready(function () {
        var adate = document.getElementsByClassName('order-created');
        [].slice.call(adate).forEach(function (d) {
            d.innerHTML = prettyDate(d.innerHTML)
        })
    });

    // Takes an ISO time and returns a string representing how
    // long ago the date represents.
    function prettyDate(time) {
        var date = new Date((time || "").replace(/-/g, "/").replace(/[TZ]/g, " ")),
            diff = (((new Date()).getTime() - date.getTime()) / 1000),
            day_diff = Math.floor(diff / 86400);

        if (isNaN(day_diff) || day_diff < 0 || day_diff >= 31)
            return;

        return day_diff == 0 && (
            diff < 60 && "vừa xong" ||
            diff < 120 && "1 phút trước" ||
            diff < 3600 && Math.floor(diff / 60) + " phút trước" ||
            diff < 7200 && "1 giờ trước" ||
            diff < 86400 && Math.floor(diff / 3600) + " giờ trước") ||
            day_diff == 1 && "Hôm qua" ||
            day_diff < 7 && day_diff + " ngày trước" ||
            day_diff < 31 && Math.ceil(day_diff / 7) + " tuần trước";
    }

// If jQuery is included in the page, adds a jQuery plugin to handle it as well
    if (typeof jQuery != "undefined")
        jQuery.fn.prettyDate = function () {
            return this.each(function () {
                var date = prettyDate(this.title);
                if (date)
                    jQuery(this).text(date);
            });
        };


    //This function is for formating Vietnamese currency
    function viNumFormat(n) {
        n = parseInt(n)
        return n.toLocaleString('vi-VN', {minimumFractionDigits: 0})
    }

    $('#switcher').attr('href', Cookies.get('theme'))
    //Theme swicher
    $('#switcher-bridge-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/bridge-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/bridge-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-dark-red-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/dark-red-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/dark-red-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-default-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/default-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/default-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-green-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/green-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/green-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-lite-blue-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/lite-blue-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/lite-blue-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-orange-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/orange-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/orange-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-pink-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/pink-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/pink-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-purple-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/purple-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/purple-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-red-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/red-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/red-theme.css', {path: '/', expires: 365});
    })
    $('#switcher-yellow-theme').click(function () {
        $('#switcher').attr('href', 'dashboard/css/theme-color/yellow-theme.css')
        Cookies.set('theme', 'dashboard/css/theme-color/yellow-theme.css', {path: '/', expires: 365});
    })


});

