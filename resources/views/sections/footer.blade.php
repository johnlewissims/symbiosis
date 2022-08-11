<footer class="content-info">

  <div class="marquee3k newsTicker ticker-tape t-text2 t-uppercase" data-speed="1" data-reverse="true" data-pausable="false">
    <div class="marqueeInner">
      <?php if (get_option('tickertape')) {
        echo (get_option('tickertape'));
      } ?>
    </div>
  </div>


  <div class="signup-email-form">
    <div class="t-h1 t-lowercase t-center t-gray mb-30">Subscribe</div>
    <div class="t-text2 t-center t-gray">Stay in the loop.</div>
    <?php echo do_shortcode('[wpforms id="399" title="false"]'); ?>

    <div class="bottom_links container t-text2 t-uppercase t-gray">
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary column" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['menu' => 'footer', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      @endif
    </div>
  </div>

</footer>