<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit User</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Link :</label>
 <input type="text" name="link" value="<?=$social['link']; ?>"  />
 <label>Icon :</label>
 <ul class="social-icons">
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-facebook-square" required="required" <?php if($social['icon'] == "fa fa-facebook-square" ){echo "checked";} ?> /><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-facebook" required="required" <?php if($social['icon'] == "fa fa-facebook" ){echo "checked";} ?> /><i class="fa fa-facebook" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-twitter" required="required" <?php if($social['icon'] == "fa fa-twitter" ){echo "checked";} ?> /><i class="fa fa-twitter" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-twitter-square" required="required" <?php if($social['icon'] == "fa fa-twitter-square" ){echo "checked";} ?> /><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-youtube" required="required" <?php if($social['icon'] == "fa fa-youtube" ){echo "checked";} ?> /><i class="fa fa-youtube" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-youtube-square" required="required" <?php if($social['icon'] == "fa fa-youtube-square" ){echo "checked";} ?> /><i class="fa fa-youtube-square" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-google-plus" required="required" <?php if($social['icon'] == "fa fa-google-plus" ){echo "checked";} ?> /><i class="fa fa-google-plus" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-google-plus-square" required="required" <?php if($social['icon'] == "fa fa-google-plus-square" ){echo "checked";} ?> /><i class="fa fa-google-plus-square" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-linkedin" required="required" <?php if($social['icon'] == "fa fa-linkedin" ){echo "checked";} ?> /><i class="fa fa-linkedin" aria-hidden="true"></i></li>
      <li class="social-icon"><input name="icon" type="radio" value="fa fa-linkedin-square" required="required" <?php if($social['icon'] == "fa fa-linkedin-square" ){echo "checked";} ?> /><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
  </ul>
  <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
