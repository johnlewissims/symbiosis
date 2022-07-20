<div class="blog-tile" data-url="<?php the_permalink(); ?>">
  <?php
  if (get_the_post_thumbnail_url()) {
  ?>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
  <?php
  }
  ?>
  <h4 class="category t-text2 t-green"><?php the_category(); ?></h4>
  <a href="<?php the_permalink(); ?>">
    <div class="title t-body1 t-green mb-20"><?php the_title(); ?></div>
  </a>
  <div class="excerpt t-text1 t-green"><?php the_excerpt(); ?></div>
</div>