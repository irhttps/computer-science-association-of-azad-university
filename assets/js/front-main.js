/**
 * Main - Front Pages
 */
'use strict';

document.addEventListener('DOMContentLoaded', function (e) {
    (function () {

        const form = document.getElementById('form'),
            selectPicker = $('.selectpicker'),
            selectYear = jQuery(form.querySelector('[name="select_year"]')),
            selectYearHalf = jQuery(form.querySelector('[name="select_year_half"]')),
            selectGroup = jQuery(form.querySelector('[name="select_group"]')),
            selectFavoritesEle = jQuery(form.querySelector('[name="select_favorites"]')),
            isWorked = jQuery(form.querySelector('[name="isWorked"]')),
            isOk = jQuery(form.querySelector('[name="isOk"]')),
            swiperLogos = document.getElementById('swiper-clients-logos'),
            swiperReviews = document.getElementById('swiper-reviews');

        let toastError = new bootstrap.Toast(document.querySelector('.toast-error'));


        // swiper carousel
        // Customers reviews
        // -----------------------------------
        if (swiperReviews) {
            new Swiper(swiperReviews, {
                slidesPerView: 1,
                spaceBetween: 5,
                grabCursor: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                loop: true,
                loopAdditionalSlides: 1,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 26
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    }
                }
            });
        }

        // Review client logo
        // -----------------------------------
        if (swiperLogos) {
            new Swiper(swiperLogos, {
                slidesPerView: 2,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                breakpoints: {
                    992: {
                        slidesPerView: 5
                    },
                    768: {
                        slidesPerView: 3
                    }
                }
            });
        }

        // Multiple slides
        // --------------------------------------------------------------------
        const swiperMultipleSlides = document.querySelector('#swiper-multiple-slides');
        if (swiperMultipleSlides) {

            const width = window.innerWidth;

            let slidesPerView = 4;

            if (width <= 480) {
                slidesPerView = 1;
            } else if (width > 480 && width <= 768) {
                slidesPerView = 2;
            } else if (width > 768 && width <= 1024) {
                slidesPerView = 3;
            }

            new Swiper(swiperMultipleSlides, {
                slidesPerView: slidesPerView,
                spaceBetween: 30,
                pagination: {
                    clickable: true,
                    el: '.swiper-pagination'
                }
            });
        }


        // Select2 Icons
        if (selectGroup.length) {
            // custom template to render icons
            function renderIcons(option) {
                if (!option.id) {
                    return option.text;
                }
                var $icon = "<i class='" + $(option.element).data('icon') + " me-2'></i>" + option.text;

                return $icon;
            }

            selectGroup.wrap('<div class="position-relative"></div>').select2({
                dropdownParent: selectGroup.parent(),
                templateResult: renderIcons,
                templateSelection: renderIcons,
                escapeMarkup: function (es) {
                    return es;
                }
            });
        }

        // Bootstrap Select
        // --------------------------------------------------------------------
        if (selectPicker.length) {
            selectPicker.selectpicker();
        }


        //start cursor back to top
        function cursor() {
            var myCursor = jQuery(".mouse");
            if (myCursor.length) {
                if ($("body")) {
                    const e = document.querySelector(".mouse-inner"),
                        t = document.querySelector(".mouse-outer");
                    let n,
                        i = 0,
                        o = !1;
                    (window.onmousemove = function (s) {
                        o ||
                        (t.style.transform =
                            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                            (e.style.transform =
                                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                            (n = s.clientY),
                            (i = s.clientX);
                    }),
                        $("body").on(
                            "mouseenter",
                            "a, .nav-menu, .choose-themes",
                            function () {
                                e.classList.add("mouse-hover"), t.classList.add("mouse-hover");
                            }
                        ),
                        $("body").on(
                            "mouseleave",
                            "a, .nav-menu, .choose-themes",
                            function () {
                                ($(this).is("a") && $(this).closest(".nav-menu").length) ||
                                (e.classList.remove("mouse-hover"),
                                    t.classList.remove("mouse-hover"));
                            }
                        ),
                        (e.style.visibility = "visible"),
                        (t.style.visibility = "visible");
                }
            }
        }
        if ($('.mouse').length) {
            let isMobile = false;
            (function (a) {
                if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) isMobile = true;
            })(navigator.userAgent || navigator.vendor || window.opera);
            if (isMobile) {
                $('.mouse-outer').css('display', 'none');
                $('.mouse-inner').css('display', 'none');
            } else {
                cursor()
            }
        }
        //end cursor back to top

        // Captcha V3
        // --------------------------------------------------------------------
        grecaptcha.ready(function () {
            // do request for recaptcha token
            // response is promise with passed token
            grecaptcha.execute('6LetlWYqAAAAAN08D8T4XGfDZ4BJ3-wBO_Gx9Mal', {action: 'validate_captcha'})
                .then(function (token) {
                    // add token value to form
                    document.getElementById('g-recaptcha-response').value = token;
                });
        });


        // ## WOW Animation
        if ($('.wow').length) {
            var wow = new WOW({
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 0, // distance to the element when triggering the animation (default is 0)
                mobile: false, // trigger animations on mobile devices (default is true)
                live: true // act on asynchronously loaded content (default is true)
            });
            wow.init();
        }


        const menu = document.getElementById('navbarSupportedContent'),
            nav = document.querySelector('.layout-navbar'),
            navItemLink = document.querySelectorAll('.navbar-nav .nav-link');

        // Initialised custom options if checked
        setTimeout(function () {
            window.Helpers.initCustomOptionCheck();
        }, 1000);

        if (typeof Waves !== 'undefined') {
            Waves.init();
            Waves.attach(".btn[class*='btn-']:not([class*='btn-outline-']):not([class*='btn-label-'])", ['waves-light']);
            Waves.attach("[class*='btn-outline-']");
            Waves.attach("[class*='btn-label-']");
            Waves.attach('.pagination .page-item .page-link');
        }

        // Init BS Tooltip
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Navbar
        window.addEventListener('scroll', e => {
            if (window.scrollY > 10) {
                nav.classList.add('navbar-active');
            } else {
                nav.classList.remove('navbar-active');
            }
        });
        window.addEventListener('load', e => {
            if (window.scrollY > 10) {
                nav.classList.add('navbar-active');
            } else {
                nav.classList.remove('navbar-active');
            }
        });


        const fv = FormValidation.formValidation(form,
            {
                fields: {

                    full_name: {
                        validators: {
                            notEmpty: {
                                message: 'نام کامل خود را وارد کنید'
                            },
                            stringLength: {
                                min: 5,
                                max: 50,
                                message: 'نام شما باید بین 5 تا 50 کارکتر باشد'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z\u0600-\u06FF\s]+$/,
                                message: 'نلم فقط باید شامل کارکتر فارسی ، انگلیسی و فاصله باشد'
                            }
                        }
                    },

                    mobile: {
                        validators: {
                            notEmpty: {
                                message: 'شماره موبایل الزامی است'
                            },
                            regexp: {
                                regexp: /^0[0-9]{10}$/,
                                message: 'شماره موبایل باید فقط شامل عدد باشد، 11 رقم داشته باشد و با 0 شروع شود'
                            }
                        }
                    },

                    select_year: {
                        validators: {
                            notEmpty: {
                                message: 'این فیلد الزامی می‌باشد'
                            }
                        }
                    },

                    select_year_half: {
                        validators: {
                            notEmpty: {
                                message: 'این فیلد الزامی می‌باشد'
                            }
                        }
                    },

                    select_group: {
                        validators: {
                            notEmpty: {
                                message: 'این فیلد الزامی می‌باشد'
                            }
                        }
                    },

                },

                plugins: { //Learn more: https://formvalidation.io/guide/plugins
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    autoFocus: new FormValidation.plugins.AutoFocus()
                }
            }
        ).on('core.form.valid', function () {


            $.ajax({
                url: baseurl + "expert-form-action.php",
                type: "POST",
                dataType: 'html',
                data: new FormData(form),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function (y) {

                    $("#card-block").block({
                        message: '<div class="spinner-border text-primary" role="status"></div>',
                        css: {
                            backgroundColor: "transparent",
                            border: "0"
                        },
                        overlayCSS: {
                            backgroundColor: "#000",
                            opacity: 0.25
                        }
                    })

                    $("#form button").attr("disabled", "disabled");
                },
                success: function (data) {
                    $("#ajaxResult").html(data);
                    $("#form button").removeAttr("disabled");

                    $("#card-block").unblock();

                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                    $("#card-block").unblock();

                    $("#form button").removeAttr("disabled");

                    toastError.show()

                }
            });

        });


        // Select2
        if (selectYear.length) {
            selectYear.wrap('<div class="position-relative"></div>');
            selectYear
                .select2({
                    placeholder: 'انتخاب سال ورود',
                    minimumResultsForSearch: -1,
                    dropdownParent: selectYear.parent()
                })
                .on('change.select2', function () {
                    // Revalidate the color field when an option is chosen
                    fv.revalidateField('select_year');
                });
        }

        if (selectYearHalf.length) {
            selectYearHalf.wrap('<div class="position-relative"></div>');
            selectYearHalf
                .select2({
                    placeholder: 'انتخاب نیمسال ورود',
                    minimumResultsForSearch: -1,
                    dropdownParent: selectYearHalf.parent()
                })
                .on('change.select2', function () {
                    // Revalidate the color field when an option is chosen
                    fv.revalidateField('select_year_half');
                });
        }

        if (selectGroup.length) {
            selectGroup.wrap('<div class="position-relative"></div>');
            selectGroup
                .select2({
                    placeholder: 'انتخاب کارگروه',
                    minimumResultsForSearch: -1,
                    dropdownParent: selectGroup.parent()
                })
                .on('change.select2', function () {
                    // Revalidate the color field when an option is chosen
                    fv.revalidateField('select_group');
                });
        }

        if (isWorked.length) {
            isWorked.on('change', function() {
                if (this.checked) {
                    this.value = '1';
                } else {
                    this.value = '0';
                }
            });
        }

        if (isOk.length) {
            isOk.on('change', function() {
                if (this.checked) {
                    this.value = '1';
                } else {
                    this.value = '0';
                }
            });
        }

    })();
});

