{{--
  Template Name: Article Template
--}}

@extends('layouts.app')

@section('content')

<?php

// Check value exists.
if (have_rows('article_layout')) :

  // Loop through rows.
  while (have_rows('article_layout')) : the_row();

    // Case: Paragraph layout.
    if (get_row_layout() == 'header') :

      $header = get_sub_field('field_62c9b0cd085d9');
?>

      <div class="default_header_layout">
        <div class="container container_2">
          <?php if ($header['title']) { ?>
            <h1 class="t-display2 t-lowercase t-green mb-80"><?php echo $header['title']; ?></h1>
          <?php } ?>
          <?php if ($header['image']) { ?>
            <div class="default_header_layout_image">
              <img class="mb-10" src="<?php echo $header['image']['url']; ?>" alt="<?php echo $header['image']['caption']; ?>">
              <span class="caption t-text2 t-green"><?php echo $header['image']['caption']; ?></span>
            </div>
          <?php } ?>

          <div class="row about-banner-2">
            <div class="col socials">
              <?php if (get_option('twitterlink')) { ?>
                <a href="<?php echo get_option('twitterlink'); ?>" class="twitter">
                  <img src="/wp-content/uploads/2022/05/Vector.png" alt="Twitter Link">
                </a>
              <? } ?>

              <?php if (get_option('instagramlink')) { ?>
                <a href="<?php echo get_option('instagramlink'); ?>" class="instagram">
                  <img src="/wp-content/uploads/2022/05/instagram.png" alt="Instagram Link">
                </a>
              <? } ?>

              <?php if (get_option('facebooklink')) { ?>
                <a href="<?php echo get_option('facebooklink'); ?>" class="facebook">
                  <img src="/wp-content/uploads/2022/07/facebook2x.png" alt="Facebook Link">
                </a>
              <? } ?>
            </div>
            <?php if ($header['text']) { ?>
              <div class="col sub_text t-body2 t-green">
                <?php echo $header['text']; ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

    <?
    elseif (get_row_layout() == 'list_section') :
      $sideLinks = get_sub_field('field_62c9b15c8f164');
      $list = get_sub_field('field_62c9b1bf8f166');
    ?>

      <div class="default_list_section_layout">
        <div class="container container_2">
          <div class="row">
            <div class="col_1">
              <?php if ($sideLinks) { ?>
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
              <?php foreach ($list as $item) { ?>
                <div class="t-body2 t-green mb-20"><?php echo $item['title']; ?></div>
                <div class="text_section t-text1 t-green mb-40"><?php echo $item['text']; ?></div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>

      <?
    elseif (get_row_layout() == 'link_boxes') :
      $linkBoxes = get_sub_field('field_62c9b21d3c45c');
      if ($linkBoxes) {
      ?>

        <div class="default_link_boxes container container_2">
          <div class="row">
            <div class="col_1">
            </div>

            <div class="col_2">
              <?php foreach ($linkBoxes as $linkBox) { ?>
                <a class="link link-box" href="<?php echo $linkBox['link']['url']; ?>">
                  <div class="button bg-green t-text1">
                    <?php echo $linkBox['link']['title']; ?>
                  </div>
                </a>
              <?php } ?>
            </div>
          </div>
        </div>

      <?php } ?>


      <?
    elseif (get_row_layout() == 'call_to_action') :
      $title = get_sub_field('field_62cb8be4a14c3');
      $text = get_sub_field('field_62cb8beda14c4');
      $link = get_sub_field('field_62cb8bf4a14c5');
      if ($link) {
      ?>

        <div class="default_cta container container_2">
          <div class="row">
            <div class="col_1">
            </div>

            <div class="col_2">
              <div class="box">
                <h6><?php echo $title; ?></h6>
                <h4><?php echo $text; ?></h4>
                <a class="link link-box" href="<?php echo $link['url']; ?>">
                  <div class="button bg-green t-text1">
                    <?php echo $link['title']; ?>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>


      <?php } ?>


      <?
    elseif (get_row_layout() == 'link_cards') :
      $linkBox = get_sub_field('field_62c9b4a9d2462');
      $links = isset($linkBox['cards']) ? $linkBox['cards'] : null;
      if ($links) {
      ?>

        <div class="default_link_cards container container_2">
          <div class="text_section">
            <h3 class="t-body2 t-green"><?php echo $linkBox['title']; ?></h3>
            <?php echo $linkBox['text']; ?>
          </div>
          <div class="card_row">
            <?php foreach ($links as $link) { ?>
              <a class="link link-box" href="<?php echo $link['link']['url']; ?>">
                <h5 class="t-body2"><?php echo $link['title']; ?></h5>
                <div class="bottom_text">
                  <img src="/wp-content/uploads/2022/07/link.png" alt="link image">
                  <p class="t-text2"><?php echo $link['location']; ?></p>
                </div>
              </a>
            <?php } ?>
          </div>
        </div>


      <?php } ?>


      <?
    elseif (get_row_layout() == 'contact_section') :
      $social = get_sub_field('social_media_boxes');
      $form = get_sub_field('form_section');
      if ($social) {
      ?>

        <div class="default_contact_section container container_2">
          <div class="row float_right">
            <div class="col">
              <div class="contact_box">
                <span class="title t-text2"><?php echo $social['title']; ?></span>
                <div class="text t-body2"><?php echo $social['text']; ?></div>
                <div class="button_row row">
                  <?php foreach ($social['buttons'] as $button) { ?>
                    <a class="link link-box" href="<?php echo $button['button']['url']; ?>">
                      <div class="button bg-green t-text1">
                        <?php echo $button['button']['title']; ?>
                      </div>
                    </a>
                  <?php } ?>
                </div>
              </div>
              <div class="form_section">
                <?php echo $form; ?>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>


<?php
    endif;
  endwhile;
endif;
?>

@endsection