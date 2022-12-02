
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Menu</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
 if(!false == $menu){
?>
<table class="table">
<thead>
<tr>
  <th>Menu 1</th>
  <th>Menu 2</th>
  <th>Menu 3</th>
  <th>Menu 4</th>
  <th>Menu 5</th>
  <th>Menu 6</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php 
foreach($menu as $menu_link ){
    ?>
    <tr>
<td><?= $menu_link['menu_one'] ?></td>
<td><?= $menu_link['menu_two'] ?></td>
<td><?= $menu_link['menu_three'] ?></td>
<td><?= $menu_link['menu_four'] ?></td>
<td><?= $menu_link['menu_five'] ?></td>
<td><?= $menu_link['menu_six'] ?></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$menu_link['id'] ?>"><i class="fa fa-edit"></i></a>
</td>
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
 if(false == $menu){
 ?>
  <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Menu</a>
 <?php
}
?>
 </div>
</div>
</div>