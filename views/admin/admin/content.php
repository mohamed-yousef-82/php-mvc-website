<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<div class="row stats">
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-users" aria-hidden="true"></i>
          <p><?php echo lang('TOTAL_USERS') ?></p>
          <span><a href="users.php"><?php $dashboard->counter('id','users'); ?></a></span>
        </div>
      </div>
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-user" aria-hidden="true"></i>
          <p><?php echo lang('PENDING_USERS') ?></p>
          <span><a href=""><?php $dashboard->counter('id','socialmedia'); ?></a></span>
        </div>
      </div>
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-pencil" aria-hidden="true"></i>
          <p><?php echo lang('TOTAL_ITEMS') ?></p>
          <span><a href="items.php"><?php $dashboard->counter('id','menu'); ?></a></span>
        </div>
      </div>
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-comments" aria-hidden="true"></i>
          <p><?php echo lang('TOTAL_COMMENTS') ?></p>
          <span><a href="comments.php"><?php $dashboard->counter('id','users'); ?></a></span>
        </div>
      </div>
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-comments" aria-hidden="true"></i>
          <p><?php echo lang('TOTAL_CATEGORIES') ?></p>
          <span><a href="comments.php"><?php $dashboard->counter('id','users'); ?></a></span>
        </div>
      </div>
    </div>
<div class="row top-space">
    <div class="box box-1">
<div class="panel">
      <h3 class="section-title"><i class="fa fa-folder-open" aria-hidden="true"></i><?php echo lang('LAST_REGISTERED_USERS') ?></h3>
          <ul>
          <?php
            ?>
            <li class="dash-row">
            <span><?php //echo $selectview['username']; ?></span>
            <div class="dash-details">
            <img style="width:80px;height:80px;" src="../../<?php //echo $selectview['image']; ?>" />
            <div class="dash-control">
            <button class='start-btn green' data-table='users' data-folder='cp-users' data-popup-open='popup-<?php echo $selectview['id'] ?>'><i class='fa fa-edit'></i><?php echo lang('EDIT') ?></button>
            <!--Edit And Update Data-->
              <div class="popup" data-popup="popup-<?php //echo $selectview['id'] ?>">
                <div class="popup-inner">
                  <form class="form form-update" method="post" enctype="multipart/form-data">
                  <h4 class="form-title"><?php echo lang('Edit ITEM') ?></h4>
                  <!--Table Name-->
                  <input type="hidden" name="table" value="users">
                  <!--Id-->
                  <input type="hidden" name="id" value="<?php //echo $selectview['id'] ?>">
                  <!--Edit username-->
                  <input type="text" name="username" value="<?php //echo $selectview['username'] ?>">
                  <!--Edit Password-->
                  <input type="password" name="password" value="<?php //echo $selectview['password'] ?>">
                  <!--Edit Email-->
                  <input type="email" name="email" value="<?php //echo $selectview['email'] ?>">
                  <!--Edit Level-->
                  <label><?php echo lang('LEVEL') ?></label>
                  <select name="level">
                  <option value="0"><?php echo lang('MANAGER') ?></option>
                  <option value="1"><?php echo lang('EDITOR') ?></option>
                  </select><!--Edit email-->
                  <!--Image-->
                  <label><?php echo lang('IMAGE') ?></label>
                  <input type="hidden" name="oldfile" value="<?php //echo $selectview['image'] ?>">
                  <input type="file" name="file" placeholder="Image">
                  <!--Update BTN-->
                  <button type="button" class="start-btn blue data-update" data-table="users" data-folder="cp-users" ><?php echo lang('UPDATEBTN') ?></button>
                  </form>
                  <!--Close BTN-->
                  <button class="popup-close" data-popup-close="popup-<?php echo $selectview['id'] ?>">x</button>
              </div>
          </div>
            <button data-id=<?php //echo $selectview['id'] ?> data-table='users' class='start-btn orangered dash-delete'><i class='fa fa-close'></i><?php echo lang('DELETEBTN') ?></button>

              <button data-id=<?php //echo $selectview['id'] ?> data-table='users' class='start-btn dark dash-active'><i class='fa fa-check'></i><?php echo lang('ACTIVATE') ?></button>


          </div>
          </li>
          </ul>
        </div>
</div>
<div class="box box-1">
<div class="panel">
<h3 class="section-title"><i class="fa fa-folder-open" aria-hidden="true"></i><?php echo lang('LAST_REGISTERED_USERS') ?></h3>
    <ul>
    <?php


      ?>
      <li class="dash-row">
      <span><?php //echo $selectview['username']; ?></span>
      <div class="dash-details">
      <img style="width:80px;height:80px;" src="../../<?php //echo $selectview['image']; ?>" />
      <div class="dash-control">
      <button class='start-btn green' data-table='users' data-folder='ws-users' data-popup-open='popup-<?php //echo $selectview['id'] ?>'><i class='fa fa-edit'></i><?php echo lang('EDIT') ?></button>
      <!--Edit And Update Data-->
        <div class="popup" data-popup="popup-<?php //echo $selectview['id'] ?>">
          <div class="popup-inner">
            <form class="form form-update" method="post" enctype="multipart/form-data">
            <h4 class="form-title"><?php echo lang('Edit ITEM') ?></h4>
            <!--Table Name-->
            <input type="hidden" name="table" value="users">
            <!--Id-->
            <input type="hidden" name="id" value="<?php //echo $selectview['id'] ?>">
            <!--Edit username-->
            <input type="text" name="username" value="<?php //echo $selectview['username'] ?>">
            <!--Edit Password-->
            <input type="password" name="password" value="<?php //echo $selectview['password'] ?>">
            <!--Edit Email-->
            <input type="email" name="email" value="<?php //echo $selectview['email'] ?>">
            <!--Edit Level-->
            <label><?php echo lang('LEVEL') ?></label>
            <select name="level">
            <option value="0"><?php echo lang('MANAGER') ?></option>
            <option value="1"><?php echo lang('EDITOR') ?></option>
            </select><!--Edit email-->
            <!--Image-->
            <label><?php echo lang('IMAGE') ?></label>
            <input type="hidden" name="oldfile" value="<?php //echo $selectview['image'] ?>">
            <input type="file" name="file" placeholder="Image">
            <!--Update BTN-->
            <button type="button" class="start-btn blue data-update" data-table="users" data-folder="ws-users" ><?php echo lang('UPDATEBTN') ?></button>

            </form>
            <!--Close BTN-->
            <button class="popup-close" data-popup-close="popup-<?php //echo $selectview['id'] ?>">x</button>
        </div>
    </div>
      <button data-id=<?php //echo $selectview['id'] ?> data-table='users' class='start-btn orangered dash-delete'><i class='fa fa-close'></i><?php echo lang('DELETEBTN') ?></button>
        <button data-id=<?php //echo $selectview['id'] ?> data-table='users' class='start-btn dark dash-active'><i class='fa fa-check'></i><?php echo lang('ACTIVATE') ?></button>

    </div>
    </li>
    </ul>
  </div>
</div>
</div>
    <div class="row row-medium top-space">
      <div class="box box-1">
<div class="panel">
        <h3 class="section-title"><i class="fa fa-folder-open" aria-hidden="true"></i><?php echo lang('LAST_ITEMS') ?></h3>
            <ul>

              <li class="dash-row">
              <span><?php //echo $selectview['name']; ?></span>
              <div class="dash-details">
              <img style="width:80px;height:80px;" src="../../<?php //echo $selectview['image']; ?>" />
              <div class="dash-control">
              <button class='start-btn green' data-table='items' data-folder='cp-items' data-popup-open='popup-<?php //echo $selectview['id'] ?>'><i class='fa fa-edit'></i><?php //echo lang('EDIT') ?></button>
              <!--Edit And Update Data-->
                <div class="popup" data-popup="popup-<?php //echo $selectview['id'] ?>">
                  <div class="popup-inner">
                    <form class="form form-update" method="post" enctype="multipart/form-data">
                    <h4 class="form-title"><?php echo lang('Edit ITEM') ?></h4>
                    <!--Table Name-->
                    <input type="hidden" name="table" value="items">
                    <!--Id-->
                    <input type="hidden" name="id" value="<?php //echo $selectview['id'] ?>">
                    <!--Edit Name-->
                    <input type="text" name="name" value="<?php //echo $selectview['name'] ?>">
                    <!--Edit Description-->
                    <textarea name="description"><?php //echo $selectview['description'] ?></textarea>
                    <!--Edit Price-->
                    <input type="text" name="price" value="<?php //echo $selectview['price'] ?>">
                    <!--Edit Category-->
                    <label><?php echo lang('CATEGORY') ?></label>
                    <select name="category">
     
                      </select>
                    <!--Image-->
                    <label><?php echo lang('IMAGE') ?></label>
                    <input type="hidden" name="oldfile" value="<?php //echo $selectview['image'] ?>">
                    <input type="file" name="file" placeholder="Image">
                    <!--Update BTN-->
                    <button type="button" class="start-btn blue data-update" data-table="items" data-folder="cp-items" ><?php //echo lang('UPDATEBTN') ?></button>
                    </form>
                    <!--Close BTN-->
                    <button class="popup-close" data-popup-close="popup-<?php //echo $selectview['id'] ?>">x</button>
                </div>
            </div>
              <button data-id=<?php //echo $selectview['id'] ?> data-table='items' class='start-btn orangered dash-delete'><i class='fa fa-close'></i><?php //echo lang('DELETEBTN') ?></button>

                <button data-id=<?php //echo $selectview['id'] ?> data-table='items' class='start-btn dark dash-active'><i class='fa fa-check'></i><?php //echo lang('ACTIVATE') ?></button>
            </div>
            </li>
            </ul>
          </div>
</div>
<div class="box box-1">
<div class="panel">
  <h3 class="section-title"><i class="fa fa-folder-open" aria-hidden="true"></i><?php echo lang('LAST_COMMENTS') ?></h3>
      <ul>
      <?php

        ?>
        <li class="dash-row">
        <span><?php //echo $selectview['username']; ?></span>
        <div class="dash-details">
        <img style="width:80px;height:80px;" src="../../<?php //echo $selectview['image']; ?>" />
        <div class="dash-control">
        <button class='start-btn green' data-table='comments' data-folder='comments' data-popup-open='popup-<?php //echo $selectview['id'] ?>'><i class='fa fa-edit'></i><?php echo lang('EDIT') ?></button>
        <!--Edit And Update Data-->
          <div class="popup" data-popup="popup-<?php //echo $selectview['id'] ?>">
            <div class="popup-inner">
              <form class="form form-update" method="post" enctype="multipart/form-data">
              <h4 class="form-title"><?php echo lang('Edit ITEM') ?></h4>
              <!--Table Name-->
              <input type="hidden" name="table" value="comments">
              <!--Id-->
              <input type="hidden" name="id" value="<?php //echo $selectview['id'] ?>">
              <!--Edit username-->
              <input type="text" name="username" value="<?php //echo $selectview['username'] ?>">
              <!--Edit Password-->
              <input type="password" name="password" value="<?php //echo $selectview['password'] ?>">
              <!--Edit Email-->
              <input type="email" name="email" value="<?php //echo $selectview['email'] ?>">
              <!--Edit Level-->
              <label><?php echo lang('LEVEL') ?></label>
              <select name="level">
              <option value="0"><?php echo lang('MANAGER') ?></option>
              <option value="1"><?php echo lang('EDITOR') ?></option>
              </select><!--Edit email-->
              <!--Image-->
              <label><?php echo lang('IMAGE') ?></label>
              <input type="hidden" name="oldfile" value="<?php //echo $selectview['image'] ?>">
              <input type="file" name="file" placeholder="Image">
              <!--Update BTN-->
              <button type="button" class="start-btn blue data-update" data-table="comments" data-folder="comments" ><?php echo lang('UPDATEBTN') ?></button>
              </form>
              <!--Close BTN-->
              <button class="popup-close" data-popup-close="popup-<?php //echo $selectview['id'] ?>">x</button>
          </div>
      </div>
        <button data-id=<?php //echo $selectview['id'] ?> data-table='comments' class='start-btn orangered dash-delete'><i class='fa fa-close'></i><?php echo lang('DELETEBTN') ?></button>

          <button data-id=<?php //echo $selectview['id'] ?> data-table='comments' class='start-btn dark dash-active'><i class='fa fa-check'></i><?php echo lang('ACTIVATE') ?></button>


      </div>
      </li>
      </ul>
    </div>
</div>
</div>
</div>
