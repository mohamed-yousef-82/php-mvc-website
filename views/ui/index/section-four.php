<section class="counter-container">
    <div class="counter-content">
<div class="counter wow fadeInDown" data-wow-duration="2s">
    <div class="container">
    <div class="center wow fadeInDown">
            <h2><?=$homepage['skills_title']?></h2>
            <p class="lead"><?=$homepage['skills_desc']?></p>
        </div>
      <ul class="row">
        <?php
        foreach($counter as $counter_data){
        ?>
                       <li class="col-md-2">
                       <div>
                       <i class="<?= $counter_data['icon'] ?>" aria-hidden="true"></i>
                       <p><?= $counter_data['title'] ?></p>
                      <span class="number" data-from="0" data-to="<?= $counter_data['count'] ?>" data-speed="5000"><?= $counter_data['count'] ?></span>
                      </div>
                      </li>
                      <?php
                       }
                       ?>
                                     </ul>
    </div>
    </div>
</div>
</section>
