<header class="banner">
  <div class="container flex space-between">
    <div class="column logo-column">
      <a href="/">
        <img src="/wp-content/uploads/2022/07/symbiosis.svg" alt="symbiosis">
      </a>
    </div>

    @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary column t-text1" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif

    <div class="nav-secodary column">
      <a href="#">
        <div class="small-button bg-green t-text1">
          join
        </div>
      </a>
      <div class="t-text1 t-gray"><a href="#">
        donate
      </a>
    </div>
    </div>
  </div>
</header>

<header class="mobile-banner">
  <div class="fixed-menu">
    <div class="button open_button">Menu</div>
  </div>
  <div class="sliding-menu">
    <div class="flex space-between">
      <div class="column logo-column">
        <a href="/">
          <img src="/wp-content/uploads/2022/07/symbiosis.svg" alt="symbiosis">
        </a>
      </div>
      <div class="button close_button">close</div>
    </div>
    <div class="mobile_menu">
      @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary column" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
      @endif
    </div>
  </div>
</header>