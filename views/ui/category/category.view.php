
<section class="page">
<div class="page-container">
<h3 class="page-title"><span>
<?php echo $this->action; ?>
</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
         foreach ($cats_controller as $article) {
         ?>
         <div class="row">
         <div class="col-md-6">
         <?php $link = strtolower(str_replace(' ','-',$article['title']));?>
         <a href="<?=$this->current_cat ?>/<?=$article['id'] ?>/<?=$link ?>"><?=$article['title'] ?></a>
         </div>
         <?php
         }
         ?>
</div>
</div>
</div>
