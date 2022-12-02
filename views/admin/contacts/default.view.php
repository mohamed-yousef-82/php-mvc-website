
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Contacts</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php 
if(false !== $contacts){
?>
<table class="table">
<thead>
<tr>
  <th>Phone</th>
  <th>Email</th>
  <th>Address</th>
  <th>Googlemap</th>
  <th>Image</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<tr>
<td><?=$contacts['phone'] ?></td>
<td><?=$contacts['email'] ?></td>
<td><?=$contacts['address'] ?></td>
<td><?=$contacts['googlemap'] ?></td>
<td><img src="<?=BASE_URL.$contacts["file"] ?>"></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$contacts['id'] ?>"><i class="fa fa-edit"></i></a>
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
 if(false == $contacts){
 ?>
  <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Contacts</a>
 <?php
}
?>
</div>
</div>
</div>