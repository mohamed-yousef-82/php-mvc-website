
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>About</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $about){
?>
<table class="table">
<thead>
<tr>
  <th>Title</th>
  <th>Details</th>
  <th>Video</th>
  <th>Image</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<tr>
<td><?=$about['name'] ?></td>
<td><?=$about['details'] ?></td>
<td><?=$about['video'] ?></td>
<td><img src="<?=BASE_URL.$about["file"] ?>"></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$about['id'] ?>"><i class="fa fa-edit"></i></a>
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
 if(false == $about){
 ?>
  <a class="start-btn blue" href="<?php echo PATH ?>/add">Add About</a>
 <?php
}
?>
</div>
</div>
</div>
