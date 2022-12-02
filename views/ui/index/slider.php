

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
        <?php
        $num = 0;
        foreach($slider as $slider_data){
        ?>
            <li data-target="#main-slider" style="background-image: url(<?= $slider_data['file'] ?>)" data-slide-to=<?= $num ?>></li>
            <?php
            $num++;
            }
            ?>
        </ol>
        <div class="carousel-inner">
        <?php
        foreach($slider as $slider_data){
        ?>
            <div class="item" style="background-image: url(<?= $slider_data['file'] ?>)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1"><?= $slider_data['title'] ?></h1>
                                <h2 class="animation animated-item-2"><?= $slider_data['description'] ?></h2>
                                <a class="btn-slide animation animated-item-3" href="pages/contact">Read More</a>
                                <a class="prev hidden-xs animation animated-item-3" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs animation animated-item-3" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.item-->
            <?php
                        }
                        ?>

        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->

</section><!--/#main-slider-->
