(function ($) {
  "use strict";

  /*
    *
    Preloder Js Start
    *
    */
  jQuery(window).on("load", function () {
    //jQuery(".preloader").fadeOut(1000);
    $(".preloader").delay(1600).fadeOut("slow");
  });
  /*
    *
    Preloder Js end
    *
    */
  // ===== Main Menu
  function mainMenu() {
    const navbarToggler = $(".nav-toggler"),
      navMenu = $(".nav-menu"),
      mobilePanel = $(".mobile-menu-panel"),
      mobilePanelMenu = $(".mobile-menu-panel .panel-menu"),
      navClose = $(".panel-close");

    // Navbar toggler
    navbarToggler.on("click", function (e) {
      e.preventDefault();

      navbarToggler.toggleClass("panel-opened");
      mobilePanel.toggleClass("panel-opened");
    });

    // Close icon
    navClose.on("click", function (e) {
      e.preventDefault();

      mobilePanel.removeClass("panel-opened");
      navbarToggler.removeClass("panel-opened");
    });

    // Adds toggle button to li items that have children
    navMenu.find("li a").each(function () {
      if ($(this).next().length > 0) {
        $(this).append(
          '<span class="dd-trigger"><i class="bi bi-chevron-down"></i></span>'
        );
      }
    });

    mobilePanelMenu.find("li a").each(function () {
      if ($(this).next().length > 0) {
        $(this).append(
          '<span class="dd-trigger"><i class="bi bi-chevron-down"></i></span>'
        );
      }
    });

    // Expands the dropdown menu on each click
    mobilePanelMenu.find(".dd-trigger").on("click", function (e) {
      e.preventDefault();
      $(this)
        .parent()
        .parent("li")
        .children("ul.submenu")
        .stop(true, true)
        .slideToggle(350);
      $(this).toggleClass("submenu-opened");
    });
  }

  // ===== Sticky Header
  function stickyHeader() {
    let scroll_top = $(window).scrollTop(),
      siteHeader = $(".site-header"),
      offsetTop = siteHeader.outerHeight(),
      offsetTopAnimation = offsetTop + 150;

    if (siteHeader.hasClass("sticky-header")) {
      if (scroll_top > offsetTopAnimation) {
        siteHeader.addClass("sticky-on");
      } else {
        siteHeader.removeClass("sticky-on");
      }
    }
  }

  // ===== Header Breakpoint Resize
  function headerBreakpointResize() {
    // Breakpoint Check
    const windowWidth = $(window).innerWidth(),
      navContainer = $(".navbar-wrapper"),
      breakpoint = 992;

    if (windowWidth <= breakpoint) {
      navContainer.addClass("breakpoint-on");
    } else {
      navContainer.removeClass("breakpoint-on");
    }

    // Header Height
    const siteHeader = $(".site-header");
    if (!siteHeader.hasClass("transparent-header")) {
      let newHeight = 0;
      siteHeader.removeAttr("style");
      newHeight = siteHeader.outerHeight();
      siteHeader.height(newHeight);
    }
  }
  /*---------------------
   === Document Ready  ===
  ----------------------*/
  $(document).ready(function () {
    mainMenu();
    headerBreakpointResize();
  });

  /*--------------------
   === Window Resize  ===
  --------------------*/
  $(window).on("resize", function () {
    headerBreakpointResize();
  });

  /*--------------------
   === Window Scroll  ===
   ----------------------*/
  $(window).on("scroll", function () {
    stickyHeader();
  });

  /*
  *
  Mixit-up js start
  *
  */
  $(".work-mixi").mixItUp();
  /*
  *
  Mixit-up js end
  *
  */

  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $("#scroll-top").fadeIn();
      } else {
        $("#scroll-top").fadeOut();
      }
    });
    $("#scroll-top").click(function () {
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  });

  /*
  *
  magnific-popup js start
  *
  */
  $(".video-icon").magnificPopup({
    type: "iframe",
    iframe: {
      markup:
        '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        "</div>",
      patterns: {
        youtube: {
          index: "youtube.com/",
          id: "v=",
          src: "//www.youtube.com/embed/%id%?autoplay=1",
        },
        vimeo: {
          index: "vimeo.com/",
          id: "/",
          src: "//player.vimeo.com/video/%id%?autoplay=1",
        },
        gmaps: {
          index: "//maps.google.",
          src: "%id%&output=embed",
        },
      },
      srcAction: "iframe_src",
    },
  });

  $(".s-gallary").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
    },
  });

  $(".sidebar-gallary-item").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
    },
  });
  /*
  *
  magnific-popup js end
  *
  */

  /*
  *
  WOW js start
  *
  */
  new WOW({
    boxClass: "wow", // default
    animateClass: "animated", // default
    offset: 0, // default
    mobile: true, // default
    live: true, // default
  }).init();
  /*
  *
  WOW js end
  *
  */

  /*
  *
  Counter UP js start
  *
  */
  var options = {
    useEasing: true,
    useGrouping: true,
    separator: ",",
    decimal: ".",
  };
  var statistics = $(".statistic");
  statistics.each(function (index) {
    var value = $(statistics[index]).html();
    var statisticAnimation = new CountUp(
      statistics[index],
      0,
      value,
      0,
      5,
      options
    );
    statisticAnimation.start();
  });

  /*
  ***
  Counter UP js end
  ***
  */

  /*
  *
  Social toggle js start
  *
  */
  var memberToggle = document.querySelectorAll(".toggle-icon");

  memberToggle.forEach((el) => {
    el.addEventListener("click", () => {
      var memberSocialIcons = el.nextElementSibling;
      memberSocialIcons.classList.toggle("toggle-active");
    });
  });

  /*
    *
    Social toggle js end
    *
    */

  /*
  *
  Product quantity js start
  *
  */
  function wcqib_refresh_quantity_increments() {
    jQuery(
      "div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)"
    ).each(function (a, b) {
      var c = jQuery(b);
      c.addClass("buttons_added"),
        c
          .children()
          .first()
          .before('<input type="button" value="-" class="minus" />'),
        c
          .children()
          .last()
          .after('<input type="button" value="+" class="plus" />');
    });
  }
  String.prototype.getDecimals ||
    (String.prototype.getDecimals = function () {
      var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
      return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0;
    }),
    jQuery(document).ready(function () {
      wcqib_refresh_quantity_increments();
    }),
    jQuery(document).on("updated_wc_div", function () {
      wcqib_refresh_quantity_increments();
    }),
    jQuery(document).on("click", ".plus, .minus", function () {
      var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
      (b && "" !== b && "NaN" !== b) || (b = 0),
        ("" !== c && "NaN" !== c) || (c = ""),
        ("" !== d && "NaN" !== d) || (d = 0),
        ("any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e)) ||
          (e = 1),
        jQuery(this).is(".plus")
          ? c && b >= c
            ? a.val(c)
            : a.val((b + parseFloat(e)).toFixed(e.getDecimals()))
          : d && b <= d
          ? a.val(d)
          : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())),
        a.trigger("change");
    });

  /*
    *
    Product quantity js end
    *
    */

  /*
  *
  product zoomer JS start
  *
  */

  var zoomer = (function () {
    var zoomBox = document.querySelectorAll(".img-zoomer-box");
    zoomBox.forEach((el) => {
      el.addEventListener(
        "mousemove",
        function (e) {
          var original = document.getElementById("img1"),
            magnified = document.getElementById("img2"),
            style = magnified.style,
            x = e.pageX - this.offsetLeft,
            y = e.pageY - this.offsetTop,
            imgWidth = original.width,
            imgHeight = original.height,
            xperc = (x / imgWidth) * 100,
            yperc = (y / imgHeight) * 100;

          if (x > 0.01 * imgWidth) {
            xperc += 0.15 * xperc;
          } //lets user scroll past right edge of image

          if (y >= 0.01 * imgHeight) {
            yperc += 0.15 * yperc;
          } //lets user scroll past bottom edge of image

          style.backgroundPositionX = xperc - 9 + "%";
          style.backgroundPositionY = yperc - 9 + "%";

          style.left = x - 180 + "px";
          style.top = y - 180 + "px";
        },
        false
      );
    });
  })();

  /*
  *
  product zoomer JS 
  *
  */

  /*
  *
  SLIDER JS START
  *
  */

  // main slider
  $(".main-slider").owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    smartSpeed: 700,
    dots: false,
    nav: true,
    autoplay: 6000,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    navText: [
      "<i class='flaticon-arrow-pointing-to-left' ></i>",
      "<i class='flaticon-arrow-pointing-to-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      600: {
        items: 1,
        nav: false,
        dost: false,
      },
      1000: {
        items: 1,
        nav: true,
        loop: true,
      },
    },
  });
  // feature slider
  $(".review-slider").owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    smartSpeed: 1500,
    autoplay: false,
    dots: false,
    nav: true,
    navText: [
      "<i class='flaticon-arrow-pointing-to-left' ></i>",
      "<i class='flaticon-arrow-pointing-to-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      600: {
        items: 1,
        nav: false,
        dots: false,
      },
      1000: {
        items: 1,
        dots: false,
        nav: true,
        loop: true,
      },
    },
  });

  // feature slider
  $(".client-slider").owlCarousel({
    items: 6,
    loop: true,
    smartSpeed: 1500,
    autoplay: false,
    dots: false,
    nav: false,
    responsive: {
      0: {
        items: 2,
        nav: false,
        dots: false,
      },
      550: {
        items: 3,
        nav: false,
        dots: false,
      },
      770: {
        items: 4,
        nav: false,
        dots: false,
      },

      1000: {
        items: 6,
        dots: false,
        nav: false,
        loop: true,
      },
    },
  });

  /*
  *
  SLIDER JS end
  *
  */
})(jQuery);
