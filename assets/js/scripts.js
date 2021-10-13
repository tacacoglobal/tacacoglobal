(function ($) {
    'use strict';



//////////////////////////////////////////////////
///////////////// Helper variables
// ///////////////////////////////////////////////
    var $assetsPath = 'assets/',
            $window = $(window),
            $windowHeight = $(window).height(),
            $windowWidth = $(window).width(),
            $document = $(document);




//////////////////////////////////////////////////
/////////////////  Helper function 
// ///////////////////////////////////////////////  

// ////////////////////////////////////////////////
// Dynamic Script Loading  
// /////////////////////////////////////////////// 
    function loadScript(url, callback) {
        var script = document.createElement("script");
        script.type = "text/javascript";
        if (script.readyState) {
            script.onreadystatechange = function () {
                if (script.readyState == "loaded" ||
                        script.readyState == "complete") {
                    script.onreadystatechange = null;
                    callback();
                }
            };
        } else {
            script.onload = function () {
                callback();
            };
        }
        script.src = url;
        document.getElementsByTagName("body")[0].appendChild(script);
    }


// ////////////////////////////////////////////////
// Check if something really exits
// /////////////////////////////////////////////// 
    $.fn.exists = function () {
        return this.length > 0;
    };




// ////////////////////////////////////////////////
//////// theme helper functions master object 
// ///////////////////////////////////////////////   
    var ECHOHelper = {

        // nav on scroll apperaance

        navOnScrollApperaance: function () {
            var $nav = $('.ec-nav');
            // add shadow when nav sticky top
            if ($nav.length) {
                $(window).scroll(function () {
                    if ($(window).scrollTop() >= 100) {
                        $('.ec-nav.sticky-top').addClass('shadow-v1');
                    } else {
                        $('.ec-nav.sticky-top').removeClass('shadow-v1');
                    }
                });
            }

        },

        // Smooth scroll to target element

        scrollTo: function () {
            $('[data-scrollto]').on('click', function () {
                var id = '#' + $(this).data('scrollto');
                if ($(id).length > 0) {
                    var offset = 0;
                    if ($('.header').length) {
                        offset = $('.header').height();
                    }
                    $('html').animate({scrollTop: $(id).offset().top}, 700);
                }
                return false;
            });
        },

        // Show mobile dropdown menu when click 
        mobileNavShow: function () {
            $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
                var $el = $(this);
                var $parent = $(this).offsetParent(".dropdown-menu");
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');

                $(this).parent("li").toggleClass('show');

                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                    $('.dropdown-menu .show').removeClass("show");
                });
                return false;
            });
        },

        // Search form toggler
        searchFormToggle: function () {

            $('.site-search-toggler').on('click', function (e) {
                e.preventDefault();
                $('.site-search').addClass('open');
            });
            $('.site-search__close').on('click', function () {
                $('.site-search').removeClass('open');
            });

        },

        // Search form toggler
        hamburger: function () {

            $('.hamburger').on('click', function (e) {
                $(this).toggleClass('is-active');
            });
        },

        //input focus shadow
        inputGroupFocus: function () {
            $('.input-group--focus .form-control').on('focus', function () {
                $(this).parent('.input-group').addClass('state--focus');
            }).on('blur', function () {
                $(this).parent('.input-group').removeClass('state--focus');
            });
        },

        //input focus shadow
        animatedShare: function () {

            $('.animated-share__trigger').on('click', function (e) {
                e.preventDefault();
                $(this).parent('.animated-share').toggleClass('active');
            });
        },

        //touchSpin
        touchSpin: function () {
            $('.ec-touchspin').each(function () {
                var $this = $(this);
                var $plus = $this.find('.ec-touchspin__plus');
                var $minus = $this.find('.ec-touchspin__minus');
                var $input = $this.find('.ec-touchspin__result');
                var $inputVal = parseInt($input.val());

                $input.on('change', function () {
                    $inputVal = parseInt($(this).val());
                });

                $plus.on('click', function () {
                    $inputVal += 1;
                    $input.val($inputVal);
                });

                $minus.on('click', function () {
                    if ($inputVal > 0) {
                        $inputVal -= 1;
                        $input.val($inputVal);
                    }
                    return;
                });


            });


        }, // End touchSpin


        //ecRating
        ecRating: function () {
            if ($('.ec-rating').exists()) {

                $('.ec-rating').each(function () {
                    var $this = $(this),
                            $target = $this.find('> *'),
                            stateClass = $this.data('state-class');

                    $target.on('mouseenter', function () {
                        $(this).addClass(stateClass);
                        $(this).prevAll().addClass(stateClass);
                        $(this).nextAll().not('.active').removeClass(stateClass);
                    });

                    $target.on('mouseleave', function () {
                        $target.not('.active').removeClass(stateClass);
                    });

                    $target.on('click', function () {
                        $(this).addClass('active ' + stateClass);
                        $(this).prevAll().addClass('active ' + stateClass);
                        $(this).nextAll().removeClass('active ' + stateClass);
                    });
                });


            } else {
                return;
            } // End if

        }, // End ecRating


        /// Scroll to top
        scrollTop: function () {
            var documentOffsetHeight = document.body.offsetHeight;

            $(window).on('scroll', function () {
                if ($(this).scrollTop() > 600) {
                    $('.scroll-top').addClass('active');
                } else {
                    $('.scroll-top').removeClass('active');
                }
            });

            $('.scroll-top').on('click', function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        },

        offsetTop: function () {

            if ($('[data-offset-top], [data-offset-top-md], [data-offset-top-lg], [data-offset-top-xl]').exists()) {
                // For all device 
                $('[data-offset-top]').each(function () {
                    var $this = $(this);
                    var offsetVal = $this.data('offset-top');
                    $this.css({
                        marginTop: offsetVal
                    });
                });

                // For md
                if ($(window).width() > 768) {
                    $('[data-offset-top-md]').each(function () {
                        var $this = $(this);
                        var offsetVal = $this.data('offset-top-md');
                        $this.css({
                            marginTop: offsetVal
                        });
                    });
                }

                // For lg
                if ($(window).width() > 992) {
                    $('[data-offset-top-lg]').each(function () {
                        var $this = $(this);
                        var offsetVal = $this.data('offset-top-lg');
                        $this.css({
                            marginTop: offsetVal
                        });
                    });
                }

                // For xl
                if ($(window).width() > 1200) {
                    $('[data-offset-top-xl]').each(function () {
                        var $this = $(this);
                        var offsetVal = $this.data('offset-top-xl');
                        $this.css({
                            marginTop: offsetVal
                        });
                    });
                }

            } // END if

        } // END offsetTop



    }; // END ECHOHelper
// ////////////////////////////////////////////////
// init all ECHOHelper
// ///////////////////////////////////////////////
    $(function () {
        ECHOHelper.navOnScrollApperaance();
        ECHOHelper.scrollTo();
        ECHOHelper.mobileNavShow();
        ECHOHelper.searchFormToggle();
        ECHOHelper.hamburger();
        ECHOHelper.inputGroupFocus();
        ECHOHelper.touchSpin();
        ECHOHelper.ecRating();
        ECHOHelper.animatedShare();
        ECHOHelper.offsetTop();
        ECHOHelper.scrollTop();
    });








// ////////////////////////////////////////////////
//////// Components/ECHOCOMPONENTS master object 
// ///////////////////////////////////////////////  
    var ECHOCOMPONENTS = {

// ////////////////////////////////////////////////
// wow js animation 
// ///////////////////////////////////////////////
        wow: function () {
            var wowInit = new WOW(
                    {
                        boxClass: 'wow', // animated element css class (default is wow)
                        animateClass: 'animated', // animation css class (default is animated)
                        offset: 10, // distance to the element when triggering the animation (default is 0)
                        mobile: false, // trigger animations on mobile devices (default is true)
                        live: true, // act on asynchronously loaded content (default is true)
                    }
            );
            wowInit.init();
        },

    }; // END ECHOCOMPONENTS obj  




// ////////////////////////////////////////////////
// init all ECHOCOMPONENTS
// ///////////////////////////////////////////////
    $(document).ready(function () {
        ECHOCOMPONENTS.wow();
    });





    $('[data-offset-top]').each(function () {
        var $this = $(this);
        var offsetVal = $this.data('offset-top');
        $this.css({
            marginTop: offsetVal
        });
    });



// ////////////////////////////////////////////////
// Init bootstrap tooltip and popover
// ///////////////////////////////////////////////  
    $('[data-toggle="tooltip"]').each(function () {
        var $this = $(this);
        var skin_color = $this.data('skin');
        $this.tooltip({
            template: '<div class="tooltip' + " " + ((skin_color) ? 'tooltip-' + skin_color : " ") + '"' + ' role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
    });

    $('[data-toggle="tooltip"]').on('click', function () {
        $('[data-toggle="tooltip"]').not(this).tooltip('hide');
    });

    $('[data-toggle="popover"]').each(function () {
        var $this = $(this);
        var skin_color = $this.data('skin');
        $this.popover({
            template: '<div class="popover' + " " + ((skin_color) ? 'popover-' + skin_color : " ") + '"' + 'role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
        });
    });

    $('[data-toggle="popover"]').on('click', function () {
        $('[data-toggle="popover"]').not(this).popover('hide');
    });


}(jQuery));

