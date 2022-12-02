<section class="page">
<div class="page-container">
<h3 class="page-title"><span>
<?php echo $this->action;?>
</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $category){
?>
<div class="row">
<div class="col-md-6">
<?php
foreach($category  as $category_data){
?>
<?php $link = strtolower(str_replace(' ','-',$category_data['name']));?>
<a href="categories\<?=$link ?>"><?=$category_data['name'] ?></a></div>
<?php
}
}else{
    echo "<p>no data</p>";
}
?>
</div>
</div>
</div>
