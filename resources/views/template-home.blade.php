{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

<div class="symbiosis-header">
  <canvas class="webgl"></canvas>
  <?php
  $hero = get_field('home_banner');
  if ($hero) : ?>
    <div class="home-banner">
      <div class="wrapper">
        <div class="t-lightgreen t-display t-center t-lowercase"><?php echo esc_attr($hero['banner_text']); ?></div>
        <img src="wp-content/uploads/2022/07/Group-55.png" alt="Symbiosis Flare">
        <div class="t-body2 t-center t-gray sub-text"><?php echo esc_attr($hero['sub_text']); ?></div>
      </div>
    </div>
  <?php endif; ?>
</div>

<div class="marquee3k ticker-tape" data-speed="1" data-reverse="true" data-pausable="false">
  <div class="marqueeInner t-text2">
    <?php if (get_option('tickertape')) {
      echo (get_option('tickertape'));
    } ?>
  </div>
</div>

<?php
$newsBar = get_field('news_bar');
if ($newsBar) : ?>
  <div class="news-bar">
    <div class="t-text2 t-center t-uppercase t-green"><?php echo esc_attr($newsBar['title']); ?></div>
    <div class="button-row mb-60">
      <? if (!empty($newsBar['link_1'])) : ?>
        <a href="<?php echo esc_attr($newsBar['link_1']); ?>">
          <div class="button bg-green t-text1">
            <?php echo esc_attr($newsBar['link_title_1']); ?>
          </div>
        </a>
      <?php endif; ?>
      <? if (!empty($newsBar['link_2'])) : ?>
        <a href="<?php echo esc_attr($newsBar['link_2']); ?>">
          <div class="button bg-green t-text1">
            <?php echo esc_attr($newsBar['link_title_2']); ?>
          </div>
        </a>
      <?php endif; ?>
      <? if (!empty($newsBar['link_3'])) : ?>
        <a href="<?php echo esc_attr($newsBar['link_3']); ?>">
          <div class="button bg-green t-text1">
            <?php echo esc_attr($newsBar['link_title_3']); ?>
          </div>
        </a>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>

<?php
$callout1 = get_field('callout_1');
$callout2 = get_field('callout_2');
if ($callout1) : ?>
  <div class="callout-section container">
    <img src="/wp-content/uploads/2022/07/circle_graphic.png" alt="Symbiosis Background Circle Image">
    <div class="t-h1 t-lowercase t-center t-green mb-20"><?php echo esc_attr($callout1['title']); ?></div>
    <div class="t-text2 t-center t-green callout-section-text"><?php echo esc_attr($callout1['sub_title']); ?></div>
    <a href="<?php echo esc_attr($callout1['link']); ?>">
      <div class="button bg-green button-big t-text1">
        <?php echo esc_attr($callout1['link_title']); ?>
      </div>
    </a>
  </div>
<?php endif; ?>

<?php
$gettingStarted = get_field('getting_started');
if ($gettingStarted) : ?>
  <div class="getting-started">
    <div class="container">
      <div class="row space-between">
        <div class="col">
          <div class="t-h1 t-gray"><?php echo esc_attr($gettingStarted['title']); ?></div>
          <img src="/wp-content/uploads/2022/07/down_arrow.png" alt="Arrow Pointing Down">
        </div>
        <div class="col">
          <div class="t-body2 t-gray mb-40"><?php echo esc_attr($gettingStarted['sub_text']); ?></div>
          <div class="t-body2 t-gray"><?php echo esc_attr($gettingStarted['sub_text_2']); ?></div>
        </div>
      </div>
      <div class="row getting-started-2">
        <?php
        $box1 = get_field('getting_started')['box_1'];
        if ($box1['title']) : ?>
          <div class="box">
            <h3><?php echo esc_attr($box1['title']); ?></h3>
            <p><?php echo esc_attr($box1['sub_text']); ?></p>
            <a href="<?php echo esc_attr($box1['link']); ?>">
              <div class="learn-row">
                <h5><?php echo esc_attr($box1['link_text']); ?></h5>
                <img src="/wp-content/uploads/2022/07/right_arrow_yellow.png" alt="Click Here">
              </div>
            </a>
          </div>
        <?php endif; ?>
        <?php
        $box2 = get_field('getting_started')['box_2'];
        if ($box2['title']) : ?>
          <div class="box">
            <h3><?php echo esc_attr($box2['title']); ?></h3>
            <p><?php echo esc_attr($box2['sub_text']); ?></p>
            <a href="<?php echo esc_attr($box2['link']); ?>">
              <div class="learn-row">
                <h5><?php echo esc_attr($box2['link_text']); ?></h5>
                <img src="/wp-content/uploads/2022/07/right_arrow_yellow.png" alt="Click Here">
              </div>
            </a>
          </div>
        <?php endif; ?>
        <?php
        $box3 = get_field('getting_started')['box_3'];
        if ($box3['title']) : ?>
          <div class="box">
            <h3><?php echo esc_attr($box3['title']); ?></h3>
            <p><?php echo esc_attr($box3['sub_text']); ?></p>
            <a href="<?php echo esc_attr($box3['link']); ?>">
              <div class="learn-row">
                <h5><?php echo esc_attr($box3['link_text']); ?></h5>
                <img src="/wp-content/uploads/2022/07/right_arrow_yellow.png" alt="Click Here">
              </div>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php
$resources = get_field('resources');
if ($resources) : ?>
  <div class="resources container">
    <div class="row space-between">
      <div class="col">
        <div class="t-h1 t-green t-lowercase header"><?php echo esc_attr($resources['title']); ?></div>
      </div>
      <div class="col">
        <div class="t-body2 t-green mb-40 sub-text"><?php echo esc_attr($resources['sub_text']); ?></div>
        <a href="<?php echo esc_attr($resources['link_1']); ?>">
          <div class="resource-row">
            <img src="/wp-content/uploads/2022/07/right_arrow_yellow.png" alt="Click Here">
            <div class="t-text1 t-green"><?php echo esc_attr($resources['link_title_1']); ?></div>
          </div>
        </a>
        <a href="<?php echo esc_attr($resources['link_2']); ?>">
          <div class="resource-row">
            <img src="/wp-content/uploads/2022/07/right_arrow_yellow.png" alt="Click Here">
            <div class="t-text1 t-green"><?php echo esc_attr($resources['link_title_2']); ?></div>
          </div>
        </a>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class=" blog-list container">
  <div class="blog-row ">

    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 4
    );

    $post_query = new WP_Query($args);

    if ($post_query->have_posts()) {
      while ($post_query->have_posts()) {
        $post_query->the_post();
    ?>

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
    <?php
      }
    }
    ?>
  </div>
  <div class="more-row">
    <h5>Load More</h5>
    <img src="/wp-content/uploads/2022/07/plus_sign.png" alt="Click Here">
  </div>
</div>

<?php
if ($callout2) : ?>
  <div class="power callout-section container">
    <img src="/wp-content/uploads/2022/07/circle_graphic.png" alt="Symbiosis Background Circle Image">
    <div class="t-h1 t-green t-center t-lowercase mb-20"><?php echo esc_attr($callout2['title']); ?></div>
    <div class="t-text2 t-green t-center callout-section-text"><?php echo esc_attr($callout2['sub_title']); ?></div>
    <a href="<?php echo esc_attr($callout2['link']); ?>">
      <div class="button bg-green button-big t-text1">
        <?php echo esc_attr($callout2['link_title']); ?>
      </div>
    </a>
  </div>
<?php endif; ?>

@endsection