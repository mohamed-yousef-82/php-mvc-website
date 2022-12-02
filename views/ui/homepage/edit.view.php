<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit Homepage Data</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
  <label>Counter Section :</label>
  <input type="text" name="counter_title" value="<?=$homepage['counter_title']; ?>" />
  <input type="text" name="counter_desc"  value="<?=$homepage['counter_desc']; ?>" />
  <label>Photos Section :</label>
  <input type="text" name="photos_title" value="<?=$homepage['photos_title']; ?>" />
  <input type="text" name="photos_desc"  value="<?=$homepage['photos_desc']; ?>" />
  <label>Skills Section :</label>
  <input type="text" name="skills_title" value="<?=$homepage['skills_title']; ?>" />
  <input type="text" name="skills_desc"  value="<?=$homepage['skills_desc']; ?>" />
  <label>Team Section :</label>
  <input type="text" name="team_title" value="<?=$homepage['team_title']; ?>" />
  <input type="text" name="team_desc"  value="<?=$homepage['team_desc']; ?>" />
  <label>Clients Section :</label>
  <input type="text" name="clients_title" value="<?=$homepage['clients_title']; ?>" />
  <input type="text" name="clients_desc"  value="<?=$homepage['clients_desc']; ?>" />
  <label>Copyright :</label>
  <input type="text" name="copyright" value="<?=$homepage['copyright']; ?>" />
    <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
