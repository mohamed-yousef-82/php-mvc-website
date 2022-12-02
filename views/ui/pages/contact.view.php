<section class="page">
<div class="page-container">
<h3 class="page-title"><span>
<?php echo $this->action; ?>
</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php 
if(false !== $contacts){
?>
<div class="row">
<div class="col-md-6">
<label>Phone</label>
<p><?=$contacts['phone'] ?></p>
<label>Email</label>
<p><?=$contacts['email'] ?></p>
<label>Address</label>
<p><?=$contacts['address'] ?></p>
</div>
<div class="col-md-6">
<div><img class="img-responsive" src="../<?= $contacts['file'] ?>"></div>
</div>
<div class="row">
<div class="col-md-12">
<label>Googlemap</label>
<p><?=$contacts['googlemap'] ?></p>
</div>
</div>
<?php
}else{
    echo "<p>no data</p>";
}
?>
</div>
</div>
</div>