
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Photos</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $photos){
  ?>
<table class="table">
<thead>
<tr>
  <th>Number</th>
  <th>Title</th>
  <th>Description</th>
  <th>Filter</th>
  <th>Image</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php
$number = 1;
foreach($photos as $photos_data){
?>
<tr>
<td><?= $number ?></td>
<td><?= $photos_data['title'] ?></td>
<td><?= $photos_data['details'] ?></td>
<td><?= $photos_data['category'] ?></td>
<td><img src="<?=BASE_URL.$photos_data["file"] ?>"></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$photos_data['id'] ?>"><i class="fa fa-edit"></i></a>
<a class="start-btn orangered" href="<?php echo PATH ?>/delete/<?=$photos_data['id'] ?>"><i class="fa fa-trash"></i></a>
</td>
</tr>
<?php
$number++;
}
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
 ?>
 <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Photo</a>
</div>
</div>
</div>
