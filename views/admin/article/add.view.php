<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Add New Article</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post" enctype="multipart/form-data">
 <label>Title :</label>
 <input type="text" name="title" />
 <label>Details :</label>
 <textarea  class="textarea" name="details"></textarea>
 <label>category :</label>
 <select name="cat_id">
   <?php
   foreach($category as $category_data){
   ?>
<option value="<?= $category_data['id'] ?>">
<?= $category_data['name'] ?>
</option>
   <?php
   }
   ?>
 </select>
 <label>Image :</label>
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
