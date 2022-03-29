import {domReady} from '@roots/sage/client';
import 'jquery';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

jQuery(function ($) {
  $(".home-banner").ripples({
    resolution: 256,
    perturbance: 0.01,
  });
});
