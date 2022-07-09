<header class="banner">
  <div class="container flex space-between">
    <div class="column logo-column">
      <a href="/">
        <img src="/wp-content/uploads/2022/07/symbiosis.svg" alt="symbiosis">
      </a>
    </div>

    @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary column" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif

    <div class="links">
    <div class="t-gray t-text1">
          about
        </div>
        <div class="t-gray t-text1">
          connect
        </div>
        <div class="t-gray t-text1">
          resources
        </div>
    </div>


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