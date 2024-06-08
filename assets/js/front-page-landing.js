/**
 * Main - Front Pages
 */
'use strict';

document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    const form = document.getElementById('form'),
        selectYear = jQuery(form.querySelector('[name="select-year"]')),
        selectYearHalf = jQuery(form.querySelector('[name="select-year-half"]')),
        swiperLogos = document.getElementById('swiper-clients-logos'),
        swiperReviews = document.getElementById('swiper-reviews');

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


    // Gallery effect
    // --------------------------------------------------------------------

    let galleryInstance;

    const swiperMultipleSlides = document.querySelector('#swiper-multiple-slides');


    // Multiple slides
    // --------------------------------------------------------------------
    if (swiperMultipleSlides) {
      new Swiper(swiperMultipleSlides, {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
          clickable: true,
          el: '.swiper-pagination'
        }
      });
    }


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
            fv.revalidateField('formValidationSelect2');
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
            fv.revalidateField('formValidationSelect2');
          });
    }



  })();
});
