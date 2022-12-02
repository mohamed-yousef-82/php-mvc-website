<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit About</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Edit Title :</label>
 <input type="text" name="name"  value="<?=$about['name']; ?>" />
 <label>Edit Details :</label>
 <textarea  class="textarea" name="details"><?=$about['details']; ?></textarea>
 <label>Edit Video :</label>
 <textarea name="video"><?=$about['video']; ?></textarea>
 <label>Edit Image :</label>
 <img src="<?=BASE_URL.$about["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$about['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
