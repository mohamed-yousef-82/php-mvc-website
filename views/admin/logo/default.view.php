
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Logo</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php 
if(false !== $logo){
?>
<table class="table">
<thead>
<tr>
  <th>Website Name</th>
  <th>Slogan</th>
  <th>Logo</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<tr>
<td><?=$logo['name'] ?></td>
<td><?=$logo['slogan'] ?></td>
<td><img src="<?=BASE_URL.$logo["file"] ?>"></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$logo['id'] ?>"><i class="fa fa-edit"></i></a>
</td>
</tr>
<?php
}else{
    echo "<p>no data</p>";
}
?>
</tbody>
</table>
<?php if(isset($_SESSION['message'])){ ?>
 <p class="message <?= isset($error)? 'error':''?>"><?= $_SESSION['message']?></p>
 <?php 
 unset($_SESSION['message']);
 }
 if(false == $logo){
 ?>
  <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Logo</a>
 <?php
}
?>
</div>
</div>
</div>