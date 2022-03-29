<header class="banner">
  <div class="column"></div>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary column" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif

  <div class="nav-secodary column">
    <a href="#">
      <div class="button bg-green">
        join
      </div>
    </a>
    <a href="#">
      donate 2
    </a>
  </div>

  <style>

  </style>
</header>
