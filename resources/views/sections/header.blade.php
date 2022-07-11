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
<!--     
The sub menu should have a transition fade in and fade out. -->


        <div class="menu-button t-gray t-text1">
        <a href="">about</a>

          <div class="sub-menu">
          <div class="t-green t-body2">
          <a href="">our strategy</a> 
         </div>

          <div class="t-green t-body2">
          <a href="">approach</a> 
          </div>

          <div class="t-green t-body2">
          <a href="">points of unity</a> 
         </div>


           </div>
        </div>
        <div class="menu-button t-gray t-text1">
            <a href="">connect</a>
            <div class="sub-menu">
            <div class="t-lightgreen t-body2">
                <a href="">local orgs</a>
                </div>

                  <div class="t-lightgreen t-body2">
                  <a href="">our discord</a> 
                  </div>

                  <div class="t-lightgreen t-body2">
                 <a href="">contact</a> 
                </div>
              </div>

       

        </div>
        <div class="menu-button t-gray t-text1">
        <a href="">resources</a>

        <div class="sub-menu">
            <div class="t-lightgreen t-body2">
                <a href="">readings</a>
                </div>

                  <div class="t-lightgreen t-body2">
                  <a href="">events & classes</a> 
                  </div>

              </div>




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