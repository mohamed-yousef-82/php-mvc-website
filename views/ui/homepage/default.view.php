
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Homepage Data</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
 if(!false == $homepage){
?>
<table class="table">
<thead>
<tr>
  <th>Counter</th>
  <th>Photos</th>
  <th>Skills</th>
  <th>Team</th>
  <th>Clients</th>
  <th>Copyright</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php
foreach($homepage as $homepage_data ){
    ?>
    <tr>
<td><?= $homepage_data['counter_title'] ?></td>
<td><?= $homepage_data['photos_title'] ?></td>
<td><?= $homepage_data['skills_title'] ?></td>
<td><?= $homepage_data['team_title'] ?></td>
<td><?= $homepage_data['clients_title'] ?></td>
<td rowspan="2"><?= $homepage_data['copyright'] ?></td>
<td rowspan="2">
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$homepage_data['id'] ?>"><i class="fa fa-edit"></i></a>
</td>
</tr>
<tr>
<td><?= $homepage_data['counter_desc'] ?></td>
<td><?= $homepage_data['photos_desc'] ?></td>
<td><?= $homepage_data['skills_desc'] ?></td>
<td><?= $homepage_data['team_desc'] ?></td>
<td><?= $homepage_data['clients_desc'] ?></td>
</tr>
<?php
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
 if(false == $homepage){
 ?>
  <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Homepage Data</a>
 <?php
}
?>
 </div>
</div>
</div>
