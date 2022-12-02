
<link rel="stylesheet" type="text/css"  href="<?php echo ADMINCSS ?>/style.css" />
<link rel="stylesheet" type="text/css"  href="<?php echo ADMINCSS ?>/start.css" />

<?php
if(isset($_SESSION['username'])){
  header('Location:admin');
}
?>
<div class="login-page">
<form class="form" method="POST" action="">
<h3 class="text-center">Admin Login</h3>
<input class="form-control input-lg" name="user"   type="text" placeholder="username" autocomplete="off"  />
<input class="form-control input-lg" name="pass"   type="password" placeholder="password" autocomplete="off"  />
<input class="start-btn orangered"   name="submit" type="submit" value="<?php echo lang('LOGON') ?>" />
</form>
</div>
