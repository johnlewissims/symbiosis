<div class="default-page-header posts_history">
  <div class="default_header_layout">
    <div class="container container_2">
      <h1 class="t-display2 t-lowercase t-green mb-80 title">
        <?php echo post_type_archive_title(); ?>
      </h1>

      <div class="row banner-template">
        <div class="col socials">
          <?php if (get_option('twitterlink')) { ?>
            <a href="<?php echo get_option('twitterlink') . 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" class="twitter">
              <img src="/wp-content/uploads/2022/07/twitter-yellow.png" alt="Twitter Link">
            </a>
          <? } ?>

          <?php if (get_option('facebooklink')) { ?>
            <a href="<?php echo get_option('facebooklink') . 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" class="facebook">
              <img src="/wp-content/uploads/2022/07/facebook-yellow.png" alt="Facebook Link">
            </a>
          <? } ?>
        </div>
        <?php if ($desc = get_the_post_type_description()) { ?>
          <div class="col sub_text t-body2 t-lightgreen">
            <?php echo $desc; ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>