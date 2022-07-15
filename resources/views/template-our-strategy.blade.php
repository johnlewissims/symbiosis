{{--
  Template Name: Our Strategy Template
--}}

@extends('layouts.app')

@section('content')

<?php
$aboutBanner = get_field('about_banner');
if ($aboutBanner) : ?>
<!-- sticky scroll is here -->
  <div class="about-1 about-banner sticky-scroll">
    <div class="container container_2">
      <h1 class="t-display2 t-lowercase t-green"><?php echo esc_attr($aboutBanner['banner_text']); ?></h1>
      <?php
      if ($aboutBanner['image']) {
      ?>
        <div class="image_wrapper">
          <img class="mb-10"src="<?php echo $aboutBanner['image']['url']; ?>" alt="<?php echo $aboutBanner['image']['caption']; ?>">
          <?php if ($aboutBanner['image']['caption']) { ?>
            <span class="caption t-text2 t-green"><?php echo $aboutBanner['image']['caption']; ?></span>
          <?php } ?>
        </div>
      <?php
      }
      ?>
      <div class="row about-banner-2">
        <div class="col socials">
          <?php if (get_option('twitterlink')) { ?>
            <a href="<?php echo get_option('twitterlink'); ?>" class="twitter">
              <img src="wp-content/uploads/2022/05/Vector-1.png" alt="Twitter Link">
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
        <div class="col sub_text t-body2 t-green">
          <?php echo $aboutBanner['sub_text']; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="about-2 text_section next-section">
  <div class="container container_2 row">
    <?php
    $textBlock1 = get_field('text_block_1');
    if ($textBlock1) : ?>
      <div class="text_block_1">
        <div class="callout-section callout-section-2 container t-lowercase">
        <img src="/wp-content/uploads/2022/07/circle_graphic.png" alt="Symbiosis Background Circle Image">
          <h3 class="t-h1 t-green"><?php echo esc_attr($textBlock1['header']); ?></h3>
        </div>
        <?php
        if ($textBlock1['image']) {
        ?>
          <div class="image_wrapper">
            <img class="mb-10" src="<?php echo $textBlock1['image']['url']; ?>" alt="<?php echo $textBlock1['image']['caption']; ?>">
            <?php if ($textBlock1['image']['caption']) { ?>
              <span class="caption t-text2 t-green"><?php echo $textBlock1['image']['caption']; ?></span>
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
              <div class="about-2b t-body1 t-green number_box number_box_border">
                <div class="list_item_1">
                  <span class="number">1</span>
                  <?php echo $textBlock1['list_item_1']; ?>
                </div>
              </div>
            <?php endif; ?>

            <?php
            if ($textBlock1['list_item_2']) :
            ?>
              <div class="about-2c t-body1 t-green number_box number_box_border">
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
</div>

<div class="about-2 about-3 text_section">
  <div class="container container_2 row">
    <?php
    $textBlock2 = get_field('text_block_2');
    if ($textBlock2) : ?>
      <div class="text_block_1">
        <div class="callout-section callout-section-2 container ">
          <img  src="/wp-content/uploads/2022/07/circle_graphic.png" alt="Symbiosis Background Circle Image">
          <h3 class="t-h1 t-green t-lowercase"><?php echo esc_attr($textBlock2['header']); ?></h3>
        </div>
        <?php
        if ($textBlock2['image']) {
        ?>
          <div class="image_wrapper">
            <img class="mb-10" src="<?php echo $textBlock2['image']['url']; ?>" alt="<?php echo $textBlock2['image']['caption']; ?>">
            <?php if ($textBlock2['image']['caption']) { ?>
              <span class="caption t-text2 t-green"><?php echo $textBlock2['image']['caption']; ?></span>
            <?php } ?>
          </div>
        <?php
        }
        ?>

        <div class="row">
          <div class="col_1"></div>
          <div class="col_2">
            <?php
            if ($textBlock2['body']) :
            ?>
              <div class="about-2a t-body1 t-green">
                <?php echo $textBlock2['body']; ?>
              </div>
            <?php endif; ?>

            <?php
            if ($textBlock2['list_item_1']) :
            ?>
              <div class="about-2b t-body2 t-green number_box mb-20">
                <div class="list_item_1">
                  <span class="number">1</span>
                  <?php echo $textBlock2['list_item_1']; ?>
                </div>
              </div>
            <?php endif; ?>

            <?php
            if ($textBlock2['list_item_2']) :
            ?>
              <div class="about-2c t-body2 t-green number_box">
                <div class="list_item_1">
                  <span class="number">2</span>
                  <?php echo $textBlock2['list_item_2']; ?>
                </div>
              </div>
            <?php endif; ?>

            <?php
            if ($textBlock2['list_item_3']) :
            ?>
              <div class="about-2c t-body2 t-green number_box">
                <div class="list_item_1">
                  <span class="number">3</span>
                  <?php echo $textBlock2['list_item_3']; ?>
                </div>
              </div>
            <?php endif; ?>

            <?php
            if ($textBlock2['list_item_4']) :
            ?>
              <div class="about-2c t-body2 t-green number_box">
                <div class="list_item_1">
                  <span class="number">4</span>
                  <?php echo $textBlock2['list_item_4']; ?>
                </div>
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
    <div class="about-4 callout-section callout-section-3 container">
      <h3 class="t-h1 t-green"><?php echo $callToAction['header']; ?></h3>
      <p><?php echo $callToAction['text']; ?></p>
      <a href="<?php echo $callToAction['link']['url']; ?>" class="button bg-green"><?php echo $callToAction['link']['title']; ?></a>
    </div>
  <?php endif; ?>

</div>

</div>

@endsection