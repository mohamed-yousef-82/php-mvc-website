<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit Slider</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Name :</label>
 <input type="text" name="title"  value="<?=$slider['title']; ?>" />
 <label>Description :</label>
 <input type="text" name="description"  value="<?=$slider['description']; ?>" />
 <label>Image :</label>
 <img src="<?=BASE_URL.$slider["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$slider['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
