
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Counter</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $counter){
?>
<table class="table">
<thead>
<tr>
  <th>Number</th>
  <th>Title</th>
  <th>Count</th>
  <th>Icon</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php
$number = 1;
foreach($counter  as $counter_data){
    ?>
    <tr>
<td><?= $number ?></td>
<td><?= $counter_data['title'] ?></td>
<td><?= $counter_data['count'] ?></td>
<td><i class="<?= $counter_data['icon'] ?>"></i></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?= $counter_data['id'] ?>"><i class="fa fa-edit"></i></a>
<a class="start-btn orangered" href="<?php echo PATH ?>/delete/<?= $counter_data['id'] ?>"><i class="fa fa-trash"></i></a>
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
 <a class="start-btn blue" href="<?php echo PATH ?>/add">Add New Item</a>
</div>
</div>
</div>
