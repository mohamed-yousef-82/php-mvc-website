
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Articles</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $article){
  ?>
<table class="table">
<thead>
<tr>
  <th>Number</th>
  <th>Title</th>
  <th>Description</th>
  <th>Category</th>
  <th>Image</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php
$number = 1;
foreach($article as $article_data){
?>
<tr>
<td><?= $number ?></td>
<td><?= $article_data['title'] ?></td>
<td><?= $article_data['details'] ?></td>
<td><?= $article_data['category'] ?></td>
<td><img src="<?=BASE_URL.$article_data["file"] ?>"></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$article_data['id'] ?>"><i class="fa fa-edit"></i></a>
<a class="start-btn orangered" href="<?php echo PATH ?>/delete/<?=$article_data['id'] ?>"><i class="fa fa-trash"></i></a>
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
 <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Article</a>
</div>
</div>
</div>
<?php
function pages(){
  global $page_items;
  global $page_start;
  $page_items =3;
  if (isset($_GET['page'])){
  $page=$_GET['page'];
  if ($page =="" || $page =="1"){
  $page_start =0;
  }else{
  $page_start=($page*$page_items)-$page_items;
  }
  }else{
  $page_start =0;
  }
}
function pages_links($table){
  global $con;
  $page_items =3;
  $stmt = $con->prepare("SELECT * FROM $table");
  $stmt->execute();
  $count = $stmt->rowCount();
  $pages_num = ceil($count/$page_items);
  echo "<ul class='pages'>";
  for($page=1;$page<=$pages_num;$page++){
      $page_start=($page*$page_items)-$page_items;
  echo "<li><a class='pager' page_start=$page_start page_items=$page_items>$page</a><li>";
  }
  echo "</ul>";
  }
 ?>
