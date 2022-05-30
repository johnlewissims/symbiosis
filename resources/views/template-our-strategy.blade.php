{{--
  Template Name: Our Strategy Template
--}}

@extends('layouts.app')

@section('content')

<?php
$aboutBanner = get_field('about_banner');
if ($aboutBanner) : ?>
  <div class="about-banner">
    <div class="container">
      <h1><?php echo esc_attr($aboutBanner['banner_text']); ?></h1>
      <h3><?php echo esc_attr($aboutBanner['sub_text']); ?></h3>
      <div class="socials">
        <span>Share</span>
        <button  onclick="copyUrl()" class="copy">
          <img src="/wp-content/uploads/2022/05/link.png" alt="Share Link">
        </button>
        <a href="#" class="twitter">
          <img src="/wp-content/uploads/2022/05/Vector.png" alt="Twitter Link">
        </a>
        <a href="#" class="instagram">
          <img src="/wp-content/uploads/2022/05/instagram.png" alt="Instagram Link">
        </a>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="text_section">
  <div class="container row">
    <div class="col_1">

      <?php
      $textBlock1 = get_field('text_block_1');
      if ($textBlock1) : ?>
      <div class="text_block_1">
        <h3><?php echo esc_attr($textBlock1['header']); ?></h3>
        <p><?php echo esc_attr($textBlock1['body']); ?></p>
      </div>
      <?php endif; ?>

      <?php
      $textBlock2 = get_field('text_block_2');
      if ($textBlock2) : ?>
      <div class="text_block_2">
        <h3><?php echo esc_attr($textBlock2['header']); ?></h3>
        <p><?php echo esc_attr($textBlock2['body']); ?></p>
      </div>
      <?php endif; ?>

      <?php
      $textBlock3 = get_field('text_block_3');
      if ($textBlock3) : ?>
      <div class="text_block_3">
        <h3><?php echo esc_attr($textBlock3['header']); ?></h3>
        <p><?php echo esc_attr($textBlock3['body']); ?></p>
      </div>
      <?php endif; ?>

      <?php
      $textBlock4 = get_field('text_block_4');
      if ($textBlock4) : ?>
      <div class="text_block_4">
        <h3><?php echo esc_attr($textBlock4['header']); ?></h3>
        <p><?php echo esc_attr($textBlock4['body']); ?></p>
      </div>
      <?php endif; ?>

      <?php
      $launchStatements = get_field('launch_statements');
      if ($launchStatements) : ?>
      <div class="launch_statements">
        <hr>
        <p><?php echo esc_attr($launchStatements['text']); ?></p>

        <div class="button_row">
          <a class="file_button" href="<?php echo $launchStatements['file_1']['url'] ?>"><?php echo $launchStatements['file_1']['title'] ?></a>
          <a class="file_button" href="<?php echo $launchStatements['file_2']['url'] ?>"><?php echo $launchStatements['file_2']['title'] ?></a>
          <a class="file_button" href="<?php echo $launchStatements['file_3']['url'] ?>"><?php echo $launchStatements['file_3']['title'] ?></a>
        </div>
      </div>
      <?php endif; ?>

    </div>

    <?php
      $links = get_field('links');
      if ($links) : ?>    
      <div class="col_2">
        <div class="link_box">
          <p>Links</p>
          <hr>
          <a class="link_wrapper" href="<?php echo $links['link_1']['url'] ?>">
            <img src="/wp-content/uploads/2022/05/arrow.png" alt="arrow">
            <p><?php echo $links['link_1']['title'] ?></p>
          </a>
          <a class="link_wrapper" href="<?php echo $links['link_2']['url'] ?>">
            <img src="/wp-content/uploads/2022/05/arrow.png" alt="arrow">
            <p><?php echo $links['link_2']['title'] ?></p>
          </a>
          <a class="link_wrapper" href="<?php echo $links['link_3']['url'] ?>">
            <img src="/wp-content/uploads/2022/05/arrow.png" alt="arrow">
            <p><?php echo $links['link_3']['title'] ?></p>
          </a>
        </div>
      </div>
    <?php endif; ?>      
  </div>

  <?php
  $callToAction = get_field('call_to_action');
  if ($callToAction) : ?>
    <div class="container call_to_action">
      <img src="" alt="background image circle">
      <h4><?php echo $callToAction['header']; ?></h4>
      <p><?php echo $callToAction['text']; ?></p>
      <a href="<?php echo $callToAction['link']['url']; ?>"><?php echo $callToAction['link']['title']; ?></a>
    </div>
  <?php endif; ?>

</div>

  <?php
    $newTicker = get_field('news_ticker');
    if ($newTicker) : ?>
    <div class="news_ticker">
      <p><?php echo $newTicker; ?></p>
    </div>
  <?php endif; ?>

@endsection