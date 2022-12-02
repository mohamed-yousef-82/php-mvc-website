<section id="about" >
  <div class="container">
  <div class="row">
    <div class="col-sm-6 wow fadeInDown">
        <h2><?= $about["name"] ?></h2>
        <p>
        <?= $about["details"] ?>
        </p>
        <a href="pages/about" class="btn btn-danger">Read More</a>
    </div>
    <div class="col-sm-6 wow fadeInDown">

        <div class="accordion">
          <?php
          $i=0;
          foreach($page as $page_data){
          ?>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?=$i?>" href="#collapse<?=$i?>">
                  <?= $page_data['title'] ?>
                  <i class="fa fa-angle-right pull-right"></i>
                </a>
              </h3>
            </div>

            <div id="collapse<?=$i?>" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="media accordion-inner">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?= $page_data['file'] ?>">
                        </div>
                        <div class="media-body">
                          <?= $page_data['details'] ?>
                          <?php $link = strtolower(str_replace(' ','-',$page_data['title']));?>
                          <a href="singlepage/<?=$page_data['id']."/".$link ?>">Read More</a>
                        </div>
                  </div>
              </div>
            </div>
          </div>

                        <?php
                        $i++;
                         }
                         ?>
            <div class="panel-group" id="accordion1">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                      Lorem ipsum dolor sit amet
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>

                <div id="collapseOne1" class="panel-collapse collapse in">
                  <div class="panel-body">
                      <div class="media accordion-inner">
                            <div class="pull-left">
                                <img class="img-responsive" src="<?php echo UIIMG ?>/accordion1.png">
                            </div>
                            <div class="media-body">
                                 <h4>Adipisicing elit</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                      </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                      Lorem ipsum dolor sit amet
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseTwo1" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                      Lorem ipsum dolor sit amet
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseThree1" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                      Lorem ipsum dolor sit amet
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseFour1" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                  </div>
                </div>
              </div>
            </div><!--/#accordion1
        </div>
    </div>
</div>
</div><!--/.row-->
</section>
