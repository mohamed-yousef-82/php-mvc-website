<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?=$homepage['photos_title']?></h2>
            <p class="lead"><?=$homepage['photos_desc']?></p>
        </div>
  <ul id="filters" class="clearfix">
    <?php
    $all_classes ="";
    foreach($photosfilter as $photosfilter_data){
    $all_classes .= ".".$photosfilter_data['name'].",";
    }
    $all_classes = trim($all_classes,",");
    ?>
    <li><span class="filter active" data-filter="<?=$all_classes ?>">All</span></li>
<script>
  all_classes = "<?=$all_classes ?>";
</script>
        <?php
        foreach($photosfilter as $photosfilter_data){
        ?>
        <li>
        <span class="filter" data-filter=".<?= $photosfilter_data['name'] ?>"><?= $photosfilter_data['name'] ?></span>
        </li>
        <?php
        }
        ?>


<!-- <li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span></li>
<li><span class="filter" data-filter=".app">App</span></li>
<li><span class="filter" data-filter=".card">Card</span></li>
<li><span class="filter" data-filter=".icon">Icon</span></li>
<li><span class="filter" data-filter=".logo">Logo</span></li>
<li><span class="filter" data-filter=".web">Web</span></li> -->
</ul>
<div id="portfoliolist">
  <?php
  foreach($photos as $photos_data){
  ?>

  <div class="portfolio <?= $photos_data['category'] ?>" data-cat="<?= $photos_data['category'] ?>">
  <div class="portfolio-wrapper">
    <img src="<?= $photos_data['file'] ?>" alt="" />
    <div class="label">
      <div class="label-text">
        <a class="text-title"><?= $photos_data['title'] ?></a>
        <span class="text-category"><?= $photos_data['details'] ?></span>
      </div>
      <div class="label-bg"> </div>
    </div>
  </div>
  </div>

  <?php
  }
  ?>
<!-- <div class="portfolio logo" data-cat="logo">
<div class="portfolio-wrapper">
  <img src="<?php echo UIIMG ?>/gallery-2.jpg" alt="" />
  <div class="label">
    <div class="label-text">
      <a class="text-title">Bird Document</a>
      <span class="text-category">Logo</span>
    </div>
    <div class="label-bg"> </div>
  </div>
</div>
</div> -->
<!-- <div class="portfolio logo" data-cat="logo">
<div class="portfolio-wrapper">
  <img src="<?php echo UIIMG ?>/gallery-3.jpg" alt="" />
  <div class="label">
    <div class="label-text">
      <a class="text-title">Bird Document</a>
      <span class="text-category">Logo</span>
    </div>
    <div class="label-bg"> </div>
  </div>
</div>
</div>
<div class="portfolio logo" data-cat="logo">
<div class="portfolio-wrapper">
  <img src="<?php echo UIIMG ?>/gallery-4.jpg" alt="" />
  <div class="label">
    <div class="label-text">
      <a class="text-title">Bird Document</a>
      <span class="text-category">Logo</span>
    </div>
    <div class="label-bg"> </div>
  </div>
</div>
</div>
<div class="portfolio logo" data-cat="logo">
<div class="portfolio-wrapper">
  <img src="<?php echo UIIMG ?>/gallery-6.jpg" alt="" />
  <div class="label">
    <div class="label-text">
      <a class="text-title">Bird Document</a>
      <span class="text-category">Logo</span>
    </div>
    <div class="label-bg"> </div>
  </div>
</div>
</div>
<div class="portfolio logo" data-cat="logo">
<div class="portfolio-wrapper">
  <img src="<?php echo UIIMG ?>/gallery-8.jpg" alt="" />
  <div class="label">
    <div class="label-text">
      <a class="text-title">Bird Document</a>
      <span class="text-category">Logo</span>
    </div>
    <div class="label-bg"> </div>
  </div>
</div>
</div>
<div class="portfolio logo" data-cat="logo">
<div class="portfolio-wrapper">
  <img src="<?php echo UIIMG ?>/gallery-2.jpg" alt="" />
  <div class="label">
    <div class="label-text">
      <a class="text-title">Bird Document</a>
      <span class="text-category">Logo</span>
    </div>
    <div class="label-bg"> </div>
  </div>
</div>
</div>
<div class="portfolio logo" data-cat="logo">
<div class="portfolio-wrapper">
  <img src="<?php echo UIIMG ?>/gallery-3.jpg" alt="" />
  <div class="label">
    <div class="label-text">
      <a class="text-title">Bird Document</a>
      <span class="text-category">Logo</span>
    </div>
    <div class="label-bg"> </div>
  </div>
</div>
</div>
<div class="portfolio logo" data-cat="logo">
<div class="portfolio-wrapper">
  <img src="<?php echo UIIMG ?>/gallery-4.jpg" alt="" />
  <div class="label">
    <div class="label-text">
      <a class="text-title">Bird Document</a>
      <span class="text-category">Logo</span>
    </div>
    <div class="label-bg"> </div>
  </div>
</div>
</div> -->
</div>
    </div><!--/.container-->
</section><!--/#recent-works-->
