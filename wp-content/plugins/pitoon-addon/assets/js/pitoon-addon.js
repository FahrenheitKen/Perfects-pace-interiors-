(function ($) {
  "use strict";

  var WidgetDefaultHandler = function ($scope) {

    let thmOwlRangeCarousels = $scope.find(".thm-owl__carousel--range");
    if (thmOwlRangeCarousels.length) {
      thmOwlRangeCarousels.each(function () {
        let elm = $(this);
        let options = elm.data("owl-options");
        let range = elm.parent().find(".thm-owl__carousel--range__input");

        elm.on("initialized.owl.carousel", function (event) {
          let itemCount = event.item.count;
          let size = event.page.size;
          let dragLength = 100 / (itemCount / size);
          range.find("input").ionRangeSlider({
            type: "single",
            min: size,
            max: itemCount - (size - 1),
            keyboard: true,
            step: 1,
            onChange: function (data) {
              let owlTo = data.from - 1;
              elm.trigger("to.owl.carousel", [owlTo, 500, true]);
            }
          });

          range.find(".irs-bar").css("width", dragLength + "%");
          range.find(".irs-handle.single").css("left", dragLength + "%");
          range.find(".irs-single").css("left", dragLength + "%");
          // range.find('.irs-handle.single').css('width', dragLength + "%")
        });

        elm.owlCarousel(
          "object" === typeof options ? options : JSON.parse(options)
        );

        elm.on("changed.owl.carousel", function (event) {
          var itemCount = event.item.count;
          var size = event.page.size;
          var curItem = event.item.index + 1;
          var dragLength = 100 / (itemCount / curItem);
          range.find("input").data("ionRangeSlider").update({
            from: curItem
          });
          range.find(".irs-bar").css("width", dragLength + "%");
          range.find(".irs-handle.single").css("left", dragLength + "%");
          range.find(".irs-single").css("left", dragLength + "%");
          // range.find('.irs-handle.single').css('width', dragLength + "%");
        });

        elm.on("resized.owl.carousel", function (event) {
          var itemCount = event.item.count;
          var size = event.page.size;
          var curItem = event.item.index + 1;
          var dragLength = 100 / (itemCount / curItem);
          range
            .find("input")
            .data("ionRangeSlider")
            .update({
              max: itemCount - (size - 1),
              from: curItem
            });
          range.find(".irs-bar").css("width", dragLength + "%");
          range.find(".irs-handle.single").css("left", dragLength + "%");
          range.find(".irs-single").css("left", dragLength + "%");
          // range.find('.irs-handle.single').css('width', dragLength + "%");
        });
      });
    }

    if (
      $scope.find(".testimonial-two__carousel").length &&
      $scope.find(".testimonial-two__thumb-carousel").length
    ) {
      var bigimage = $scope.find(".testimonial-two__carousel");
      var thumbs = $scope.find(".testimonial-two__thumb-carousel");
      //var totalslides = 10;
      var syncedSecondary = true;
  
      bigimage
        .owlCarousel({
          items: 1,
          slideSpeed: 2000,
          nav: true,
          autoplay: true,
          dots: false,
          loop: true,
          navText: [
            '<i class="icon-left-arrow" aria-hidden="true"></i>',
            '<i class="icon-right-arrow" aria-hidden="true"></i>'
          ]
        })
        .on("changed.owl.carousel", syncPosition);
  
      thumbs
        .on("initialized.owl.carousel", function () {
          thumbs.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
          items: 3,
          margin: 10,
          dots: true,
          nav: true,
          navText: [
            '<i class="icon-left-arrow" aria-hidden="true"></i>',
            '<i class="icon-right-arrow" aria-hidden="true"></i>'
          ],
          smartSpeed: 700,
          slideBy: 3
        })
        .on("changed.owl.carousel", syncPosition2);
  
      function syncPosition(el) {
        //if loop is set to false, then you have to uncomment the next line
        //var current = el.item.index;
  
        //to disable loop, comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
  
        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }
        //to this
        thumbs
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = thumbs.find(".owl-item.active").length - 1;
        var start = thumbs.find(".owl-item.active").first().index();
        var end = thumbs.find(".owl-item.active").last().index();
  
        if (current > end) {
          thumbs.data("owl.carousel").to(current, 500, true);
        }
        if (current < start) {
          thumbs.data("owl.carousel").to(current - onscreen, 500, true);
        }
      }
  
      function syncPosition2(el) {
        if (syncedSecondary) {
          var number = el.item.index;
          bigimage.data("owl.carousel").to(number, 500, true);
        }
      }
  
      thumbs.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage.data("owl.carousel").to(number, 500, true);
      });
    }
    let curvedItem = $scope.find(".curved-circle--item");
    if (curvedItem.length) {
      curvedItem.each(function(){
        let self = $(this);
        self.circleType({
          radius: 80
        });
      });
      
    }

    if ($scope.find(".odometer").length) {
      var odo = $(".odometer");
      odo.each(function () {
        $(this).appear(function () {
          var countNumber = $(this).attr("data-count");
          $(this).html(countNumber);
        });
      });
    }

    if ($scope.find(".masonary-layout").length) {
      let masonaryElm = $scope.find(".masonary-layout");
      masonaryElm.imagesLoaded(function () {
        masonaryElm.isotope({
          layoutMode: "masonry"
        });
      });
    }
    if ($scope.find(".post-filter").length) {
      $scope
        .find(".post-filter li")
        .children(".filter-text")
        .on("click", function () {
          var Self = $(this);
          var selector = Self.parent().attr("data-filter");
          $(".post-filter li").removeClass("active");
          Self.parent().addClass("active");
          $(".filter-layout").isotope({
            filter: selector,
            animationOptions: {
              duration: 500,
              easing: "linear",
              queue: false
            }
          });
          return false;
        });
    }

    if ($scope.find(".tabs-box").length) {
      $scope.find(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
        e.preventDefault();
        var target = $($(this).attr("data-tab"));

        if ($(target).is(":visible")) {
          return false;
        } else {
          target
            .parents(".tabs-box")
            .find(".tab-buttons")
            .find(".tab-btn")
            .removeClass("active-btn");
          $(this).addClass("active-btn");
          target
            .parents(".tabs-box")
            .find(".tabs-content")
            .find(".tab")
            .fadeOut(0);
          target
            .parents(".tabs-box")
            .find(".tabs-content")
            .find(".tab")
            .removeClass("active-tab");
          $(target).fadeIn(300);
          $(target).addClass("active-tab");
        }
      });
    }

    if ($scope.find(".neighborhoods__faq").length) {
      $scope
        .find(".neighborhoods__faq")
        .find(".accrodion")
        .each(function () {
          $(this).on("click", function () {
            let tabName = $(this).data("name");
            $(".neighborhoods__img-box")
              .find(".neighborhoods__location-1")
              .removeClass("active");
            $(".neighborhoods__img-box")
              .find(".neighborhoods__location-1." + tabName)
              .addClass("active");
          });
        });
    }

    // Accrodion
    if ($scope.find(".accrodion-grp").length) {
      var accrodionGrp = $(".accrodion-grp");
      accrodionGrp.each(function () {
        var accrodionName = $(this).data("grp-name");
        var Self = $(this);
        var accordion = Self.find(".accrodion");
        Self.addClass(accrodionName);
        Self.find(".accrodion .accrodion-content").hide();
        Self.find(".accrodion.active").find(".accrodion-content").show();
        accordion.each(function () {
          $(this)
            .find(".accrodion-title")
            .on("click", function () {
              if ($(this).parent().hasClass("active") === false) {
                $(".accrodion-grp." + accrodionName)
                  .find(".accrodion")
                  .removeClass("active");
                $(".accrodion-grp." + accrodionName)
                  .find(".accrodion")
                  .find(".accrodion-content")
                  .slideUp();
                $(this).parent().addClass("active");
                $(this).parent().find(".accrodion-content").slideDown();
              }
            });
        });
      });
    }

    // Popular Causes Progress Bar
    if ($scope.find(".count-bar").length) {
      $(".count-bar").appear(
        function () {
          var el = $(this);
          var percent = el.data("percent");
          $(el).css("width", percent).addClass("counted");
        },
        {
          accY: -50
        }
      );
    }

    // Popular Causes Progress Bar
    if ($scope.find(".circle-progress").length) {
      $(".circle-progress").appear(function () {
        let circleProgress = $(".circle-progress");
        circleProgress.each(function () {
          let progress = $(this);
          let progressOptions = progress.data("options");
          progress.circleProgress(progressOptions);
        });
      });
    }

    //Fact Counter + Text Count
    if ($scope.find(".count-box").length) {
      $(".count-box").appear(
        function () {
          var $t = $(this),
            n = $t.find(".count-text").attr("data-stop"),
            r = parseInt($t.find(".count-text").attr("data-speed"), 10);

          if (!$t.hasClass("counted")) {
            $t.addClass("counted");
            $({
              countNum: $t.find(".count-text").text()
            }).animate(
              {
                countNum: n
              },
              {
                duration: r,
                easing: "linear",
                step: function () {
                  $t.find(".count-text").text(Math.floor(this.countNum));
                },
                complete: function () {
                  $t.find(".count-text").text(this.countNum);
                }
              }
            );
          }
        },
        {
          accY: 0
        }
      );
    }

    let thmSwiperSliders = $scope.find(".thm-swiper__slider");
    if (thmSwiperSliders.length) {
      thmSwiperSliders.each(function () {
        let elm = $(this);
        let options = elm.data("swiper-options");
        let thmSwiperSlider = new Swiper(
          elm,
          "object" === typeof options ? options : JSON.parse(options)
        );
      });
    }

    let thmOwlCarousels = $scope.find(".thm-owl__carousel");
    if (thmOwlCarousels.length) {
      thmOwlCarousels.each(function () {
        let elm = $(this);
        let options = elm.data("owl-options");
        let thmOwlCarousel = elm.owlCarousel(
          "object" === typeof options ? options : JSON.parse(options)
        );
      });
    }

    let thmOwlNavCarousels = $scope.find(".thm-owl__carousel--custom-nav");
    if (thmOwlNavCarousels.length) {
      thmOwlNavCarousels.each(function () {
        let elm = $(this);
        let owlNavPrev = elm.data("owl-nav-prev");
        let owlNavNext = elm.data("owl-nav-next");
        $(owlNavPrev).on("click", function (e) {
          elm.trigger("prev.owl.carousel");
          e.preventDefault();
        });

        $(owlNavNext).on("click", function (e) {
          elm.trigger("next.owl.carousel");
          e.preventDefault();
        });
      });
    }

    if ($scope.find("#testimonials-two__thumb").length) {
      let testimonialsThumb = new Swiper("#testimonials-two__thumb", {
        slidesPerView: 3,
        spaceBetween: 0,
        speed: 1400,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        loop: true,
        autoplay: {
          delay: 5000
        }
      });

      let testimonialsCarousel = new Swiper("#testimonials-two__carousel", {
        observer: true,
        observeParents: true,
        speed: 1400,
        mousewheel: false,
        slidesPerView: 1,
        autoplay: {
          delay: 5000
        },
        thumbs: {
          swiper: testimonialsThumb
        },
        pagination: {
          el: "#testimonials-one__carousel-pagination",
          type: "bullets",
          clickable: true
        }
      });
    }
    if ($scope.find(".post-filter").length) {
      var postFilterList = $(".post-filter li");
      // for first init
      $(".filter-layout").isotope({
        filter: ".filter-item",
        animationOptions: {
          duration: 500,
          easing: "linear",
          queue: false
        }
      });
      // on click filter links
      postFilterList.on("click", function () {
        var Self = $(this);
        var selector = Self.attr("data-filter");
        postFilterList.removeClass("active");
        Self.addClass("active");

        $(".filter-layout").isotope({
          filter: selector,
          animationOptions: {
            duration: 500,
            easing: "linear",
            queue: false
          }
        });
        return false;
      });
    }
  };

  var WidgetFaqHandler = function ($scope) {
    if ($scope.find(".accrodion-grp").length) {
      var accrodionGrp = $(".accrodion-grp");
      accrodionGrp.each(function () {
        var accrodionName = $(this).data("grp-name");
        var Self = $(this);
        var accordion = Self.find(".accrodion");
        Self.addClass(accrodionName);
        Self.find(".accrodion .accrodion-content").hide();
        Self.find(".accrodion.active").find(".accrodion-content").show();
        accordion.each(function () {
          $(this)
            .find(".accrodion-title")
            .on("click", function () {
              if ($(this).parent().hasClass("active") === false) {
                $(".accrodion-grp." + accrodionName)
                  .find(".accrodion")
                  .removeClass("active");
                $(".accrodion-grp." + accrodionName)
                  .find(".accrodion")
                  .find(".accrodion-content")
                  .slideUp();
                $(this).parent().addClass("active");
                $(this).parent().find(".accrodion-content").slideDown();
              }
            });
        });
      });
    }
  };

  

  var WidgetFooterSubscribeHandler = function ($scope) {
    // mailchimp form
    if ($scope.find(".mc-form").length) {
      $(".mc-form").each(function () {
        var Self = $(this);
        var mcURL = Self.data("url");
        var mcResp = Self.parent().find(".mc-form__response");

        Self.ajaxChimp({
          url: mcURL,
          callback: function (resp) {
            // appending response
            mcResp.append(function () {
              return '<p class="mc-message">' + resp.msg + "</p>";
            });
            // making things based on response
            if (resp.result === "success") {
              // Do stuff
              Self.removeClass("errored").addClass("successed");
              mcResp.removeClass("errored").addClass("successed");
              Self.find("input").val("");

              mcResp.find("p").fadeOut(10000);
            }
            if (resp.result === "error") {
              Self.removeClass("successed").addClass("errored");
              mcResp.removeClass("successed").addClass("errored");
              Self.find("input").val("");

              mcResp.find("p").fadeOut(10000);
            }
          }
        });
      });
    }
  };

  //elementor front start
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/widget",
      WidgetDefaultHandler
    );

    elementorFrontend.hooks.addAction(
      "frontend/element_ready/pitoon-faq.default",
      WidgetFaqHandler
    );

    elementorFrontend.hooks.addAction(
      "frontend/element_ready/footer-subscribe.default",
      WidgetFooterSubscribeHandler
    );
  });

   // login 
   $( "#pitoon-login" ).submit(function( event ) {

    event.preventDefault();
    
    var login = 'action=signup_paragon&param=login&' + $(this).serialize();
    $.ajax({
        type   : "POST",
        url    : pitoon_login_object.ajaxurl,
        data   :  login,
            beforeSend: function() {
            // setting a timeout
            $(".login-result").addClass('loading');
        },
        success: function(data){
            $(".login-result").removeClass('loading');
        if(data.status==2){
            $(".login-result").removeClass('alert alert-warning');
            $(".login-result").html(data.message).addClass('alert alert-success');
            window.location.href = pitoon_login_object.login_redirect_url;
        }else if(data.status==1){
            $(".login-result").html(data.message).addClass('alert alert-warning');
        }else{
            $(".login-result").html(pitoon_login_object.message).addClass('alert alert-warning');
        }
        }
    });
    }); //end login


// register 
$( "#pitoon-registration" ).submit(function( event ) {

event.preventDefault();

  var signupForm = 'action=signup_paragon&param=register&' + $(this).serialize();
  $.ajax({
      type   : "POST",
      url    : pitoon_login_object.ajaxurl,
      data   :  signupForm,
       beforeSend: function() {
        // setting a timeout
        $(".registration-result").addClass('loading');
    },
      success: function(data){
        $(".registration-result").removeClass('loading');
          if(data.status==2){
          $(".registration-result").removeClass('alert alert-warning');
          $(".registration-result").html(data.message).addClass('alert alert-success');
          window.location.href = pitoon_login_object.registration_redirect_url;
      }else{
          $(".registration-result").html(data.message).addClass('alert alert-warning');
      }
      }
  });
}); //end register

})(jQuery);
