
<div id="main-slider">
  <div class="slide-show-container">
    <ul class="circles">
      <?php
      $num = 1;
      foreach($slider as $slider_data){
      ?>
      <li class="circle" data-show="#<?php echo $num ?>">
      </li>
      <?php
      $num++;
      }
      ?>
    </ul>
    <div class="slide-show">
      <?php
      $num = 1;
      foreach($slider as $slider_data){
      ?>
      <div class="slider" id="<?php echo $num ?>">
        <div class="details">
            <h1 class="animation animated-item-1"><?= $slider_data['title'] ?></h1>
            <h2 class="animation animated-item-2"><?= $slider_data['description'] ?></h2>
            <a class="btn-slide animation animated-item-3" href="pages/contact">Read More</a>
        </div>

       <img src="<?= $slider_data['file'] ?>" />

      </div>
        <?php
        $num ++;
      }
      ?>

      </div>
      <div class="links">
      <a id="stop">
        <button id="run">
        </button>
      </a>
      <a id="next" class="prev hidden-xs animation animated-item-3" href="#main-slider" data-slide="prev">
<i class="fa fa-chevron-left"></i>
</a>
<a id="prev" class="next hidden-xs animation animated-item-3" href="#main-slider" data-slide="next">
<i class="fa fa-chevron-right"></i>
</a>
</div>
  </div>
    </div>
