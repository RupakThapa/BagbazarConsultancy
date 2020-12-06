<?php include 'includes/header.php'; 
include 'admin/includes/db.php'; 
?>

    <div class="wrap">

<?php include 'includes/navigation.php'; ?>
      <!-- END header -->
   


      <div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- Menu -->
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Items -->
    <div class="carousel-inner">
        
        <div class="item active">
            <img src="images/yogurt-1.png" alt="Slide 1" />
        </div>
        <div class="item">
            <img src="images/yogurt-2.png" alt="Slide 2" />
        </div>
        <div class="item">
            <img src="images/yogurt-3.png" alt="Slide 3" />
        </div>
    </div> 
    <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>


      <!-- END section -->

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                <?php include 'includes/posts.php'; ?>
              </div>

            </div>

            <!-- END main-content -->

            
            <!-- END sidebar -->

          </div>
        </div>
      </section>



    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>


    <script src="js/main.js"></script>
  </body>
</html>
