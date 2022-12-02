<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?=$homepage['clients_title']?></h2>
            <p class="lead"><?=$homepage['clients_desc']?></p>
        </div>

        <div class="partners">
        <div class="owl-carousel">

<!-- <div> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php echo UIIMG ?>/partners/partner1.png"></a></div> -->
<?php
foreach($clients as $clients_data){
?>
<div> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?= $clients_data['file'] ?>"></a></div>
<?php
}
?>
</div>

        </div>
    </div><!--/.container-->
</section><!--/#partner-->
