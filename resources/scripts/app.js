import {domReady} from '@roots/sage/client';
import 'jquery';
import './effects/header.js';

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
      function copyUrl() {
        console.log('hello')
      }
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
