
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Users</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<table class="table">
<thead>
<tr>
  <th>Number</th>
  <th>Name</th>
  <th>Email</th>
  <th>Image</th>
  <th>Control</th>
</tr>
</thead>
<tbody>

<?php

?>
<?php 
$number = 1;
if(false !== $users){
foreach($users  as $user){
?>
<tr>
<td><?= $number ?></td>
<td><?= $user['name'] ?></td>
<td><?= $user['email'] ?></td>
<td><img src="<?=BASE_URL.$user["file"] ?>"></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$user['id'] ?>"><i class="fa fa-edit"></i></a>
<a class="start-btn orangered" href="<?php echo PATH ?>/delete/<?=$user['id'] ?>"><i class="fa fa-trash"></i></a>
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
 <a class="start-btn blue" href="<?php echo PATH ?>/add">Add User</a>
</div>
</div>
</div>