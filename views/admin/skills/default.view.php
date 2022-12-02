
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Skills</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
 if(!false == $skills){
?>
<table class="table">
<thead>
<tr>
  <th colspan="2">Skills One</th>
  <th colspan="2">Skills Two</th>
  <th colspan="2">Skills Three</th>
  <th colspan="2">Skills Four</th>
  <th colspan="2">Skills Five</th>
  <th colspan="2">Skills Six</th>
  <th colspan="2">Skills Seven</th>
  <th colspan="2">Skills Eight</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php
foreach($skills as $skills_data ){
    ?>
    <tr>
<td><?= $skills_data['skills_one_name'] ?></td>
<td><?= $skills_data['skills_one_perc'] ?></td>
<td><?= $skills_data['skills_two_name'] ?></td>
<td><?= $skills_data['skills_two_perc'] ?></td>
<td><?= $skills_data['skills_three_name'] ?></td>
<td><?= $skills_data['skills_three_perc'] ?></td>
<td><?= $skills_data['skills_four_name'] ?></td>
<td><?= $skills_data['skills_four_perc'] ?></td>
<td><?= $skills_data['skills_five_name'] ?></td>
<td><?= $skills_data['skills_five_perc'] ?></td>
<td><?= $skills_data['skills_six_name'] ?></td>
<td><?= $skills_data['skills_six_perc'] ?></td>
<td><?= $skills_data['skills_seven_name'] ?></td>
<td><?= $skills_data['skills_seven_perc'] ?></td>
<td><?= $skills_data['skills_eight_name'] ?></td>
<td><?= $skills_data['skills_eight_perc'] ?></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$skills_data['id'] ?>"><i class="fa fa-edit"></i></a>
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
 if(false == $skills){
 ?>
  <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Menu</a>
 <?php
}
?>
 </div>
</div>
</div>
