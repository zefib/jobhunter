<!-- Portfolio Modals -->
          <?php 
          if($queryVac->rowCount() == 0){
            echo "No data";
            ?>
            <?php
          }else{
            $Count=0;
            foreach ($ResultsVac as $rowVac) {
              $imgUrl=$rowVac['vimage'];
            
          ?>
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php echo $Count;?>">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"><?php echo $rowVac['vname']; ?></h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5"><?php echo $rowVac['vdescription']; ?></p>
              <?php if ($_SESSION['JHUserid']==$rowVac['userid'] or $rowVac['type']==0) {
                ?>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                Close Project</a>
                <?php
              }else{?>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                Join Project</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
          <?php
            $Count=$Count+1;
            }
          }
          ?>