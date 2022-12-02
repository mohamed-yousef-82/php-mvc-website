<section id="team-work">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 wow fadeInDown">
                  <div class="col-sm-6 wow fadeInDown animated">

                  <div class="cards">
                    <?php
                    $i=0;
                    foreach($team as $team_data){
                    ?>
                  <div data-card="<?=$i ?>" class="card"><div class="img-container"><img src="<?= $team_data['file'] ?>" /></div><div class="card-data"><h3><?= $team_data['name'] ?></h3><p><?= $team_data['job'] ?></p></div></div>
                                  <?php
                                  $i++;
                                   }
                                   ?>
                  </div>
                  </div>

                  <div class="col-sm-6 wow fadeInDown animated">
                  <div class="team-text">
                  <h2><?=$homepage['team_title']?></h2>
                  <p>
                  <?=$homepage['counter_desc']?>
                  </p>
                  <a href="" class="btn btn-danger">Read More</a>
              </div>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInDown">
                <div class="skill">
                  <?= $about["video"] ?>
                </div>

            </div><!--/.col-sm-6-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->
