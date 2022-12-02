<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit Photo</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Name :</label>
 <input type="text" name="title"  value="<?=$photos['title']; ?>" />
 <label>Description :</label>
  <textarea  class="textarea" name="details"><?=$photos['details']; ?></textarea>
 <label>Filter :</label>
 <select name="filter_id">
   <?php
   foreach($photosfilter as $photosfilter_data){
   ?>
<option value="<?= $photosfilter_data['id'] ?>" <?php if($photosfilter_data['id'] == $photos['filter_id']){ echo "selected";} ?>>
<?= $photosfilter_data['name'] ?>
</option>
   <?php
   }
   ?>
 </select>
 <label>Image :</label>
 <img src="<?=BASE_URL.$photos["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$photos['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
