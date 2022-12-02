<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <?=$homepage['copyright']?>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                      <li><a href="#">Home</a></li>

                      <?php
                      foreach($page as $page_data){
                      ?>
                      <?php $link = strtolower(str_replace(' ','-',$page_data['title']));?>
                      <li><a href="singlepage/<?=$page_data['id'] ?>/<?=$link ?>"><?=$page_data['title'] ?></a></li>
                                    <?php
                                     }
                                     ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo UIJS ?>/jquery.js"></script>
    <script src="<?php echo UIJS ?>/bootstrap.min.js"></script>
    <script src="<?php echo UIJS ?>/jquery.prettyPhoto.js"></script>
    <script src="<?php echo UIJS ?>/jquery.isotope.min.js"></script>
    <script src="<?php echo UIJS ?>/main.js"></script>
    <script src="<?php echo UIJS ?>/script.js"></script>
    <script src="<?php echo UIJS ?>/wow.min.js"></script>
    <script src="<?php echo UIJS ?>/jquery.countTo.js"></script>
    <script src="<?php echo UIJS ?>/jquery.mixitup.min.js"></script>
    <script src="<?php echo UIJS ?>/owl.carousel.min.js"></script>
</body>
</html>
<?php
ob_end_flush();
?>
