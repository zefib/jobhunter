<?php include 'Header.php'; ?>
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Vacancies</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <?php include 'vacanciesData.php'; 
          if($queryVac->rowCount() == 0){
            echo "No data";
            ?>
            <?php
          }else{
            $Count=0;
            foreach ($ResultsVac as $rVac) {
              $imgUrl=$rVac["vimage"];
          ?>
            <div class="col-md-6 col-lg-4">
              <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?php echo $Count;?>">
                <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                  <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                    <i class="fa fa-search-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/portfolio/<?php echo $imgUrl?>.png" alt="<?php echo 'index/img'.$Count; ?>">
              </a>
            </div>
          <?php
            $Count=$Count+1;
            }
          }
          ?>
          
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
          </div>
        </div>
      </div>
    </section>

<?php
  include 'vacancies.php'; 
  include 'Footer.php';
  include 'data.php'; 
?>