{{--
  Template Name: Our Strategy Template
--}}

@extends('layouts.app')

@section('content')

<?php
$aboutBanner = get_field('about_banner');
if ($aboutBanner) : ?>
  <div class="about-1 about-banner sticky-scroll">
    <div class="container container_2">
      <h1 class="t-h1 t-green"><?php echo esc_attr($aboutBanner['banner_text']); ?></h1>
      <?php
      if ($aboutBanner['image']) {
      ?>
        <div class="image_wrapper">
          <img src="<?php echo $aboutBanner['image']['url']; ?>" alt="<?php echo $aboutBanner['image']['caption']; ?>">
          <?php if ($aboutBanner['image']['caption']) { ?>
            <span class="caption t-caption"><?php echo $aboutBanner['image']['caption']; ?></span>
          <?php } ?>
        </div>
      <?php
      }
      ?>
      <div class="row about-banner-2">
        <div class="col socials">
          <a href="#" class="twitter">
            <img src="/wp-content/uploads/2022/05/Vector.png" alt="Twitter Link">
          </a>
          <a href="#" class="instagram">
            <img src="/wp-content/uploads/2022/05/instagram.png" alt="Instagram Link">
          </a>
        </div>
        <div class="col sub_text t-body2 t-green">
          <?php echo $aboutBanner['sub_text']; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="about-2 text_section">
  <div class="container container_2 row">
      <?php
      $textBlock1 = get_field('text_block_1');
      if ($textBlock1) : ?>
        <div class="text_block_1">
          <div class="callout-section callout-section-2 container">
            <img src="/wp-content/uploads/2022/07/circle_graphic.png" alt="Symbiosis Background Circle Image">
            <h3 class="t-h1 t-green"><?php echo esc_attr($textBlock1['header']); ?></h3>
          </div>  
          <?php
          if ($textBlock1['image']) {
          ?>
            <div class="image_wrapper">
              <img src="<?php echo $textBlock1['image']['url']; ?>" alt="<?php echo $textBlock1['image']['caption']; ?>">
              <?php if ($textBlock1['image']['caption']) { ?>
                <span class="caption t-caption"><?php echo $textBlock1['image']['caption']; ?></span>
              <?php } ?>
            </div>
          <?php
          }
          ?>  

          <div class="row">
            <div class="col_1"></div>
            <div class="col_2">
              <?php
              if ($textBlock1['body']) :
              ?>
                <div class="about-2a t-body2 t-green">
                  <?php echo $textBlock1['body']; ?>
                </div>    
              <?php endif; ?>

              <?php
              if ($textBlock1['list_item_1']) :
              ?>
                <div class="about-2b t-body1 t-green number_box">
                  <div class="list_item_1">
                    <span class="number">1</span>
                    <?php echo $textBlock1['list_item_1']; ?>
                  </div>
                </div>    
              <?php endif; ?>

              <?php
              if ($textBlock1['list_item_2']) :
              ?>
                <div class="about-2c t-body1 t-green number_box">
                  <div class="list_item_1">
                    <span class="number">2</span>
                    <?php echo $textBlock1['list_item_2']; ?>
                  </div>
                </div>
              <?php endif; ?>

              <?php
              if ($textBlock1['body_2']) :
              ?>
                <div class="about-2d t-body2 t-green">
                  <?php echo $textBlock1['body_2']; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>

        </div>
      <?php endif; ?>
  </div>

  <?php
  $callToAction = get_field('call_to_action');
  if ($callToAction) : ?>
    <div class="callout-section callout-section-2 container">
      <img src="/wp-content/uploads/2022/07/circle_graphic.png" alt="Symbiosis Background Circle Image">
      <h3 class="t-h1 t-green"><?php echo $callToAction['header']; ?></h3>
      <p><?php echo $callToAction['text']; ?></p>
      <a href="<?php echo $callToAction['link']['url']; ?>"><?php echo $callToAction['link']['title']; ?></a>
    </div>
  <?php endif; ?>

</div>

<?php
$newTicker = get_field('news_ticker');
if ($newTicker) : ?>
  <div class="marquee3k newsTicker ticker-tape" data-speed="0.25" data-reverse="true" data-pausable="false">
    <div class="marqueeInner">
      <?php echo $newTicker; ?>
    </div>
  </div>
<?php endif; ?>

<div class="signup-email-form">
  <h2>Subscribe</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
</div>

@endsection