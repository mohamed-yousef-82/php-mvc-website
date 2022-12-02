<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit User</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Name :</label>
 <input type="text" name="name"  value="<?=$users['name']; ?>" />
 <label>Age :</label>
 <input type="text" name="email"  value="<?=$users['email']; ?>" />
 <label>Password :</label>
 <input type="hidden"   name="oldpassword" value="<?=$users['password']; ?>">
 <input type="password" name="password"  placeholder="Leave This Field Empty If You Dont Want To Change" />
 <label>Edit Image :</label>
 <img src="<?=BASE_URL.$users["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$users['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
