<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit Home Icon</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Link :</label>
 <input type="text" name="title" value="<?=$icons['title']; ?>"  />
 <label>Description :</label>
 <textarea type="text" name="description"><?=$icons['description']; ?></textarea>
 <label>Icon :</label>
 <ul class="social-icons">
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-handshake-o" required="required" <?php if($icons['icon'] == "fa fa-handshake-o" ){echo "checked";} ?> /><i class="fa fa-handshake-o" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-podcast" required="required" <?php if($icons['icon'] == "fa fa-podcast" ){echo "checked";} ?> /><i class="fa fa-podcast" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-shower" required="required" <?php if($icons['icon'] == "fa fa-shower" ){echo "checked";} ?> /><i class="fa fa-shower" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa fa-bath" required="required" <?php if($icons['icon'] == "fa fa-bath" ){echo "checked";} ?> /><i class="fa fa fa-bath" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-user-o" required="required" <?php if($icons['icon'] == "fa fa-user-o" ){echo "checked";} ?> /><i class="fa fa-user-o" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-archive" required="required" <?php if($icons['icon'] == "fa fa-archive" ){echo "checked";} ?> /><i class="fa fa-archive" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-area-chart" required="required" <?php if($icons['icon'] == "fa fa-area-chart" ){echo "checked";} ?> /><i class="fa fa-area-chart" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-car" required="required" <?php if($icons['icon'] == "fa fa-car" ){echo "checked";} ?> /><i class="fa fa-car" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-balance-scale" required="required" <?php if($icons['icon'] == "fa fa-balance-scale" ){echo "checked";} ?> /><i class="fa fa-balance-scale" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-bar-chart" required="required" <?php if($icons['icon'] == "fa fa-bar-chart" ){echo "checked";} ?> /><i class="fa fa-bar-chart" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-university" required="required" <?php if($icons['icon'] == "fa fa-university" ){echo "checked";} ?> /><i class="fa fa-university" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-beer" required="required" <?php if($icons['icon'] == "fa fa-beer" ){echo "checked";} ?> /><i class="fa fa-beer" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-bed" required="required" <?php if($icons['icon'] == "fa fa-bed" ){echo "checked";} ?> /><i class="fa fa-bed" aria-hidden="true"></i></li>

  </ul>
  <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
