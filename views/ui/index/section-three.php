<section id="feature" >
    <div class="container">
       <div class="center wow fadeInDown">
            <h2>Features</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="features">
              <?php
              foreach($icons as $icons_data){
              ?>
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="<?= $icons_data['icon'] ?>"></i>
                        <h2><?= $icons_data['title'] ?></h2>
                        <h3><?= $icons_data['description'] ?></h3>
                    </div>
                </div><!--/.col-md-4-->
                <?php
                }
                ?>
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->
