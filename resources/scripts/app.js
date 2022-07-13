import { domReady } from "@roots/sage/client";
import "jquery";
import Masonry from "masonry-layout";
import "es-module-shims";
//import './effects/header-2.js';
import Marquee3k from "marquee3000";

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  jQuery(function ($) {
    try {
      // News Ticker
      let newsFeed = $(".news_ticker").text();
      Marquee3k.init();

      // Navigation Menu
      $(".banner .menu-item a:first-child").on("mouseover", function () {
        if (!$(this).closest(".sub-menu").length) {
          $(".banner .menu-item a:first-child").removeClass('menu-hover-effect')
          $(this).addClass('menu-hover-effect')

          $(".sub-menu").removeClass("active");
          $(this).next().addClass("active");
        }
      });

      $("main").on("mouseover", function () {
        $(".banner .menu-item a:first-child").removeClass('menu-hover-effect')
        $(".sub-menu").removeClass("active");
      });

      // Mobile
      $(".open_button").on("click", function () {
        $(".sliding-menu").addClass("active");
        $("body").addClass("lock");
      });

      $(".close_button").on("click", function () {
        $(".sliding-menu").removeClass("active");
        $("body").removeClass("lock");
      });

      // Blog Roll
      var elem = document.querySelector(".blog-row");
      if (elem) {
        new Masonry(elem, {
          gutter: 20,
          itemSelector: ".blog-tile",
        });

        let startingHeight = $(".blog-list").height();
        $(".more-row").on("click", function () {
          let currentHeight = $(".blog-list").height();
          $(".blog-list").css("max-height", startingHeight + currentHeight);
        });
      }

      // Make Entire Blog Card Clickable
      $(".blog-tile").on("click", function () {
        let url = $(this).data("url");
        location.href = url;
      });

      // Stick Header
      var fixed = document.querySelector('.sticky-scroll');
      var next = document.querySelector('.next-section');
      var header = document.querySelector('header');
      if(fixed && (document.documentElement.clientWidth > 772)) {
        document.addEventListener("scroll", function() {
          if (isVisible(next)) {
            $('.sticky-scroll').addClass('active')
            $('.next-section').css('margin-top', document.documentElement.clientHeight + (document.documentElement.clientHeight / 3))
          } else {
            $('.sticky-scroll').removeClass('active')
            $('.next-section').css('margin-top', 0)
          }
        });
      }
    } catch (e) {
      console.log(e);
    }
  });
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);


// Is Visible Function
function isVisible(elem) {
  if (!(elem instanceof Element)) throw Error('DomUtil: elem is not an element.');

  const elemTop = elem.getBoundingClientRect().top

  console.log(elemTop, document.documentElement.clientHeight, window.innerHeight)
  if (elemTop > (document.documentElement.clientHeight || window.innerHeight)) {return false} else { return true };
}