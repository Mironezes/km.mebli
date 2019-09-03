jQuery(document).ready(function() {

// Constants
const KEYCODE_ESC = 27;


    // Smooth To Section Scroll {
        jQuery('.top-navigation__link').on('click','a', function (event) {
            event.preventDefault();
            let id  = jQuery(this).attr('href'),
                top = jQuery(id).offset().top;
            jQuery('body,html').animate({scrollTop: top}, 900);
        });        


    // Owl Carousel Setting
    let owlReviews = jQuery('.owl-carousel.reviews-slider');
    owlReviews.owlCarousel({
        center: true,
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        mouseDrag: false,
        autoplayTimeout: 10000,
    });

    jQuery('.reviews-slider-navigation .reviews-slider-navigation__next').on("click", function() {
        owlReviews.trigger('next.owl.carousel');
    })

    jQuery('.reviews-slider-navigation .reviews-slider-navigation__prev').on("click", function() {
        owlReviews.trigger('prev.owl.carousel');
    })


    // Owl Carousel Setting
    let owlAdvantages  = jQuery('.owl-carousel.advantages-slider').on('initialized.owl.carousel changed.owl.carousel', function(e) {
        if (!e.namespace)  {
          return;
        }
        let carousel = e.relatedTarget;
        jQuery('.advantages-slider-counter').html('<span class="advantages-slider-counter__current"> 0' + 
                parseInt(carousel.relative(carousel.current()) + 1) + '</span> <span class="advantages-slider-counter__devider">/</span>' + 
                '<span class="advantages-slider-counter__total"> 0' + carousel.items().length) + '</span>';
      }).owlCarousel({
            center: true,
            items: 1,
            loop: true,
            margin: 10,
            autoplay: false,
            mouseDrag: false,
            autoplayTimeout: 10000,
            animateOut: 'fadeOut',
      });

    jQuery('.advantages-slider-navigation .advantages-slider-navigation__next').on("click", function() {
        owlAdvantages.trigger('next.owl.carousel');
    })

    jQuery('.advantages-slider-navigation .advantages-slider-navigation__prev').on("click", function() {
        owlAdvantages.trigger('prev.owl.carousel');
    })

    // Advantages Slider Dots Settings
    let advantagesSliderDotsContainer = jQuery('.owl-carousel.advantages-slider .owl-dots');
    let advantagesSliderDotsContainerHeight = jQuery(advantagesSliderDotsContainer).outerHeight();

    jQuery(advantagesSliderDotsContainer).css('top', 'calc(50% - ' + advantagesSliderDotsContainerHeight + 'px)');


    // Gallery Tabs Settings
    function galleryTabs() {
        jQuery( ".gallery-tabs-control__item" ).each(function() {

          jQuery(this).on('click', function() {

            let targetID = jQuery(this).attr('data-target');
            let currentTabHeadingItem = jQuery(this);
            let tabHeadingItem = jQuery('.gallery-tabs-control__item');
            let tabContentItem = jQuery(this).parents('.gallery-tabs').find('.gallery-tab-content');

            jQuery(tabContentItem).each(function() {
                if(jQuery(this).is('#' + targetID)) {
                    jQuery(tabHeadingItem).removeClass('active');
                    jQuery(tabContentItem).removeClass('opened');
                    jQuery(this).addClass('opened');
                    jQuery(currentTabHeadingItem).addClass('active');
                }
            });

          });
        });


    }
    galleryTabs();



    // Modals Settings
    function modalForms(modalBlock) {
            let modal = jQuery(modalBlock);
            let html = jQuery('html');
            let modalCloseButton = jQuery(modalBlock).find('.modal-close');
            let modalSendButton = jQuery(modalBlock).find('.modal-body input[type="submit"]');
            let modalHeader = jQuery(modalBlock).find('.modal-header');
            let modalFooter = jQuery(modalBlock).find('.modal-footer');

            if(modal.hasClass('opened')) {
                jQuery(html).removeClass('fixed');
                jQuery(modal).removeClass('opened');
            }
            else {
                jQuery(html).addClass('fixed');
                jQuery(modal).addClass('opened');                
            }

            jQuery(modalCloseButton).on('click', function() {
                jQuery(html).removeClass('fixed');
                jQuery(modal).removeClass('opened');                
            });

            jQuery(document).keyup(function(e) {
              if (e.keyCode == KEYCODE_ESC) jQuery(modalCloseButton).click();
            });


            jQuery(modalSendButton).on('click', function() {
                jQuery(modalHeader).remove();   
                jQuery(modalFooter).remove();             
            });
    }

    jQuery('.top-navigation__callback-link').on('click', function() {
        modalForms('.main-callback-modal');
    });
    
    jQuery('.main-banner__button').on('click', function() {
        modalForms('.share-callback-modal');
    });
    
    jQuery('.footer-calculate-price-form__button').on('click', function() {
        modalForms('.calculate-callback-modal');
    });



});