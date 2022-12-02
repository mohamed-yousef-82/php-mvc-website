<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit Contacts</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Edit Phone :</label>
 <input type="text" name="phone"  value="<?=$contacts['phone']; ?>" />
 <label>Edit Email :</label>
 <input type="text" name="email"  value="<?=$contacts['email']; ?>" />
 <label>Edit Address :</label>
 <input type="text" name="address"  value="<?=$contacts['address']; ?>" />
 <label>Edit Googlemap :</label>
 <textarea type="text" name="googlemap"><?=$contacts['googlemap']; ?></textarea>
 <label>Edit Image :</label>
 <img src="<?=BASE_URL.$contacts["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$contacts['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
