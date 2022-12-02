<section class="page">
<div class="page-container">
<h3 class="page-title"><span>
<?php echo $this->action; ?>
</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $about){
?>
<div class="row">
<div class="col-md-6">
<h4><?=$about['name'] ?></h4>
<p>
<?= $about["details"] ?>
</p>
</div>
<div class="col-md-6">
<div><img src="<?=BASE_URL.$about["file"] ?>" /></div>
</div>
<?php
}else{
    echo "<p>no data</p>";
}
?>
</div>
</div>
</div>
