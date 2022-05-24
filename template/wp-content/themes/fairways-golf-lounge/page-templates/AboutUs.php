<?php
  /*
    Template name: About Us
  */
?>
<?php $url_image = get_template_directory_uri().'/assets/images' ?>
<?php get_header() ?>
<main>
  <section class="section-banner">
    <?php $image = get_field('banner_image') ?>
    <img class="image-banner" src="<?=$image['url']?>" alt="">
    <img class="vector-banner" src="<?=$url_image?>/vector-banner.png" alt="">
  </section>

  <section class="aboutus-cauchuyenthuonghieu">
    <div class="wrapper">
      <?php get_field('cau_chuyen_thuong_hieu') ?>
      <h2 class="color-brown fw-6 big-title aboutus-title "><?= get_field('cau_chuyen_thuong_hieu_title')?></h2>
      <div class="aboutus-content">
        <h3 class="color-dark-green aboutus-title"><?= get_field('cau_chuyen_thuong_hieu_p1')?></h3>
        <p class="color-black"><?= get_field('cau_chuyen_thuong_hieu_p2')?></p>
      </div>
      <div class="aboutus-image">
        <img src="" alt="">
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>
