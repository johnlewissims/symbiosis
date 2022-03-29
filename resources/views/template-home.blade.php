{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

<?php
$hero = get_field('home_banner');
if ($hero) : ?>
  <div class="home-banner">
    <h1><?php echo esc_attr($hero['banner_text']); ?></h1>
    <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Symbiosis Flare">
    <h3><?php echo esc_attr($hero['sub_text']); ?></h3>
  </div>
<?php endif; ?>

<?php
$tickerTape = get_field('ticker_tape');
if ($tickerTape) : ?>
  <div class="ticker-tape">
    <?php echo esc_attr($tickerTape['news']); ?>
  </div>
<?php endif; ?>

<?php
$newsBar = get_field('news_bar');
if ($newsBar) : ?>
  <div class="news-bar">
    <h2><?php echo esc_attr($newsBar['title']); ?></h2>
    <div class="button-row">
      <? if (!empty($newsBar['link_1'])) : ?>
        <a href="<?php echo esc_attr($newsBar['link_1']); ?>">
          <div class="button bg-green">
            <?php echo esc_attr($newsBar['link_title_1']); ?>
          </div>
        </a>
      <?php endif; ?>
      <? if (!empty($newsBar['link_2'])) : ?>
        <a href="<?php echo esc_attr($newsBar['link_2']); ?>">
          <div class="button bg-green">
            <?php echo esc_attr($newsBar['link_title_2']); ?>
          </div>
        </a>
      <?php endif; ?>
      <? if (!empty($newsBar['link_3'])) : ?>
        <a href="<?php echo esc_attr($newsBar['link_3']); ?>">
          <div class="button bg-green">
            <?php echo esc_attr($newsBar['link_title_3']); ?>
          </div>
        </a>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>

<?php
$callout1 = get_field('callout_1');
if ($callout1) : ?>
  <div class="callout-section">
    <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Symbiosis Background Circle Image">
    <h2><?php echo esc_attr($callout1['title']); ?></h2>
    <p><?php echo esc_attr($callout1['sub_title']); ?></p>
    <a href="<?php echo esc_attr($callout1['link']); ?>">
      <div class="button bg-green button-big">
        <?php echo esc_attr($callout1['link_title']); ?>
      </div>
    </a>
  </div>
<?php endif; ?>

<?php
$gettingStarted = get_field('getting_started');
if ($gettingStarted) : ?>
  <div class="getting-started">
    <div class="row">
      <div class="col">
        <h2><?php echo esc_attr($callout1['title']); ?></h2>
        <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Arrow Pointing Down">
      </div>
      <div class="col">
        <p><?php echo esc_attr($callout1['sub_text']); ?></p>
      </div>
    </div>
    <div class="row">
      <?php
      $box1 = get_field('getting_started')['box_1'];
      if ($box1['title']) : ?>
        <div class="box">
          <h3><?php echo esc_attr($box1['title']); ?></h3>
          <p><?php echo esc_attr($box1['sub_text']); ?></p>
          <a href="<?php echo esc_attr($box1['link']); ?>">
            <div class="learn-row">
              <h5><?php echo esc_attr($box1['link_text']); ?></h5>
              <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Click Here">
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
              <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Click Here">
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
              <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Click Here">
            </div>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>

<?php
$resources = get_field('resources');
if ($resources) : ?>
<div class="resources">
  <div class="row">
    <div class="col">
      <h2>Resources</h2>
    </div>
    <div class="col">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <a href="#">
        <div class="resource-row">
          <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Click Here">
          <h5>Learn More</h5>
        </div>        
      </a>
      <a href="#">
        <div class="resource-row">
          <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Click Here">
          <h5>Learn More</h5>
        </div>        
      </a>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="blog-list">
  <div class="blog-row">
    <div class="blog-tile">
      <img src="https://images.unsplash.com/photo-1485056981035-7a565c03c6aa" alt="Blog Image">
      <h3>Lorem ipsum dolor sit amet</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="blog-tile">
      <img src="https://images.unsplash.com/photo-1580845884420-a44b1e37b8e9" alt="Blog Image">
      <h3>Lorem ipsum dolor sit amet</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="blog-tile">
      <img src="https://images.unsplash.com/photo-1580845884420-a44b1e37b8e9" alt="Blog Image">
      <h3>Lorem ipsum dolor sit amet</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="blog-tile">
      <img src="https://images.unsplash.com/photo-1485056981035-7a565c03c6aa" alt="Blog Image">
      <h3>Lorem ipsum dolor sit amet</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div class="more-row">
    <h5>Load More</h5>
    <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Click Here">
  </div>
</div>

<div class="callout-section">
  <img src="https://www.freepnglogos.com/uploads/line-png/long-lines-straight-line-transparent-7.png" alt="Symbiosis Background Circle Image">
  <h2>All power to the People</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
  <a href="#">
    <div class="button bg-green button-big">
      Learn More
    </div>
  </a>
</div>

<div class="ticker-tape">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
  -
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
</div>

<div class="signup-email-form">
  <h2>Subscribe</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
</div>

@endsection