import {domReady} from '@roots/sage/client';
import 'jquery';
import Masonry from 'masonry-layout';
import 'es-module-shims';
//import './effects/header-2.js';
import Marquee3k from 'marquee3000';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err)
  }

  jQuery(function ($) {
    try {

      // News Ticker
      let newsFeed = $('.news_ticker').text()
      Marquee3k.init()

      // Navigation Menu
      $('.menu-item a:first-child').on( "mouseover", function() {
        if(!$(this).closest('.sub-menu').length) {
          $('.sub-menu').removeClass('active');
          $(this).next().addClass('active');
        }
      });

      $('main').on( "mouseover", function() {
        $('.sub-menu').removeClass('active');
      });

      // Blog Roll
      var elem = document.querySelector('.blog-row');
      if(elem) {
        new Masonry( elem, {
          gutter: 20,
          itemSelector: '.blog-tile'
        });

        let startingHeight = $('.blog-list').height();
        $('.more-row').on( "click", function() {
          let currentHeight = $('.blog-list').height();
          $('.blog-list').css("max-height", startingHeight + currentHeight);
        });
      }

      // // Stick Header
      // var fixed = document.querySelector('.sticky-scroll');
      // if(fixed) {
      //   var header = document.querySelector('header');
      //   document.addEventListener("scroll", function() {
      //     const el = header;
      //     let rect = el.getBoundingClientRect();
      //     console.log(rect.top);
      //     if (rect.top <= 0 - header.offsetHeight) {
      //       console.log('here');
      //       $('.sticky-scroll').addClass('fixed_navbar');
      //       $('.spacer-section').height(document.querySelector('.sticky-scroll').offsetHeight);
      //     } else {
      //     }
      //   });
      // }

    }
    catch (e) {
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
