<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit Page</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Name :</label>
 <input type="text" name="title"  value="<?=$page['title']; ?>" />
 <label>Details :</label>
 <textarea type="text" name="details"><?=$page['details']; ?></textarea>
 <label>Image :</label>
 <img src="<?=BASE_URL.$page["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$page['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
