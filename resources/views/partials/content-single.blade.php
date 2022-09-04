<article @php(post_class())>
  <header>
    <div class="default-page-header posts_single">
      <div class="default_header_layout">
        <div class="container container_2">
          <h1 class="t-display2 t-lowercase t-green mb-80 title">
            <?php echo the_title(); ?>
          </h1>
          <?php if ($img = get_the_post_thumbnail_url(get_the_ID(), 'full')) { ?>
            <div class="default_header_layout_image">
              <div class="bg_image_post" style="background-image:url(<?php echo $img; ?>);"></div>
              <span class="caption t-text2 t-green"><?php get_the_post_thumbnail_caption(); ?></span>
            </div>
          <?php } ?>

          <div class="row banner-template">
            <div class="col socials">
              <?php if (get_option('twitterlink')) { ?>
                <a href="<?php echo get_option('twitterlink') . 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" class="twitter">
                  <img src="/wp-content/uploads/2022/05/Vector.png" alt="Twitter Link">
                </a>
              <? } ?>

              <?php if (get_option('facebooklink')) { ?>
                <a href="<?php echo get_option('facebooklink') . 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" class="facebook">
                  <img src="/wp-content/uploads/2022/07/facebook2x.png" alt="Facebook Link">
                </a>
              <? } ?>
            </div>
            <?php if ($desc = get_the_excerpt()) { ?>
              <div class="col sub_text t-body2 t-green">
                <?php echo $desc; ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="entry-content">

    <?php
      $sideLinks = get_field('sidelinks');
    ?>
    <div class="default_list_section_layout">
      <div class="container container_2">
        <div class="row">
          <div class="col_1">
            <?php if (isset($sideLinks)) { ?>
              <div class="side_links">
                <div class="t-text1 t-green mb-20">Getting Started</div>
                <?php foreach ($sideLinks as $sideLink) { ?>
                  <div class="side_link_entry">
                    <div><a class="link" href="<?php echo $sideLink['link']['url']; ?>">
                        <img src="/wp-content/uploads/2022/07/right_arrow_yellow.png" alt="Arrow"></div>
                    <div class="t-caption t-green side_link_text"><?php echo $sideLink['link']['title']; ?></div>
                    </a>
                  </div>

                <?php } ?>
              </div>
            <?php } ?>
          </div>
          <div class="col_2">
            <div class="post_content">
              @php(the_content())
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>

  @php(comments_template())
</article>