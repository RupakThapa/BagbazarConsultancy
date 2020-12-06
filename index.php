<?php include 'includes/header.php'; 
include 'admin/includes/db.php'; 
?>

<?php include 'includes/navigation.php'; ?>

<!-- carousel -->
<main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="images/slider2.webp" alt="First slide">
      <div class="container">
        <!-- <div class="carousel-caption text-left">
          <h1>Example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div> -->
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="images/slider1.png" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Top Study Destinations</h1>
    
          <p><a class="btn btn-lg btn-primary" href="studyin.php" role="button">Learn more</a></p>
        </div>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- carousel ends-->
<div class="container marketing">
    <div class="row justify-content-center pb-5"> <h2>Our Features</h2></div>
   
<!-- features -->
<div class="row">
          <div class="col-lg-4">
            <img class="" src="images/feature1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Scholarship</h2>
            <p>As a leading education consultancy in Nepal, BOEC helps you to get scholarship from vast opportunities available at international universities and colleges. You can get scholarship offered by universities /college as per your academic performances.</p>
            <p><a class="btn dami-button" href="services.php" role="button">Learn More</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="" src="images/feature2.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Documentation</h2>
            <p>We first help you complete your application materials they apply to the universities or college of your choice. We have skilled and experienced editors who provide editing service for your supporting documents such as Statements of Purpose (SOP)</p>
            <p><a class="btn dami-button" href="services.php" role="button">Learn More</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="" src="images/feature3.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Counseling</h2>
            <p>We not only counsel students but also their guardians. When you are planning your education abroad it can be very stressful, time consuming and utterly confusing. You might even ask yourself many questions while considering your studies. </p>
            <p><a class="btn dami-button" href="services.php" role="button">Learn More</a></p>
          </div><!-- /.col-lg-4 -->
        </div>

<!-- feature ends  -->


</div>


<h1 class="text-center pb-3">Study Destinations</h1>
<!-- country -->
<div class="container">
<div class="row blog-entries">
            <div class="text-center col-md-12 col-lg-12 main-content">
              <div class="row">
                <?php include 'includes/posts.php'; ?>
              </div>
            </div>
          </div>
          </div>
          <!-- <div class="col-md-4">
          <?php include 'includes/posts.php'; ?>
      </div> -->



<!-- country -->



<section class="testimonial-area section-gap">
    <!-- <h1 style="text-align: center;">STUDY DESTINATIONS</h1> -->
    <div class="container ">


      <h1 style="text-align: center;">STUDENT REVIEWS</h1><br>
      <div class="row">
        <div class="col-sm-12" style="background-image: url(images/testimonial.png);">
          <div class="slideshow-container" style="background: transparent;">

            <!-- Full-width slides/quotes -->
            <div class="mySlides">
              <q>To get good job you need to get quality education, BOEC provides you the best academic education you'll
                ever get.
                I am thankful to the BOEC team, because they not only give the educational way but also take care of us
                like as
                our guardians. Best Wishes in upcomming days to BOEC. Thank you BOEC Family                </q>
              <p class="author">- Laxman Bhatta</p>
            </div>

            <div class="mySlides">
              <q>BOEC is doing best job for student to find out their path i am thankful to BOEC that it help me to find
                out the one of the best college
                in India, there support and guidance is priceless and like a parents. The only consultancy on which
                parents can trust for there children
                feature and its only BOEC.</q>
              <p class="author">- Ram Bahadur Rana</p>
            </div>

            <div class="mySlides">
              <q> I would like to thank BOEC and specially Executive Director sir for his constant support and guidance
                throughout my visa process. </q>
              <p class="author">- Chadani Chanda Shahi</p><br><br>
            </div>

            <div class="mySlides">
              <q>All the staffs and members of BOEC are very friendly, supporting. They provide good customer service. I
                would like to recommend them to everyone.</q>
              <p class="author">- Gajendra Shah</p><br>
            </div>

            <div class="mySlides">
              <q>I chose BOEC among other consultancies because from choosing best destination to selecting courses to
                application process, they helped me in overall activity. I am thankful to them for assisting me to
                receive my visa without any difficulties</q>
              <p class="author">- Govinda Chaudhary</p><br>
            </div>

            <div class="mySlides">
              <q>My experience with BOEC was really good. They made effort to prepare all my document and guided me
                throughout the entire process. I’m really thankful towards them.</q>
              <p class="author">- Binita Chamling Rai</p><br>
            </div>

            <div class="mySlides">
              <q>BOEC is one of the best consultancies in Nepal. They won’t fierce students to go for certain colleges
                or universities instead they encourage you to do some research on your own and then only proceed for the
                further process. I found BOEC perfect for me.</q>
              <p class="author">- Bibek Rana</p><br>
            </div>

            <div class="mySlides">
              <q>Like others I decided to go to abroad to continue my further studies. I had no idea of processing . So,
                I decided to visit consultancy . I visited many but not satisfied by anyone. Then my friend recommended
                from Australia to visit BOEC this consultancy guided me all the things about abroad study from top to
                bottom and the result was mine Australian Visa.</q>
              <p class="author">- Rachana Ghimire</p>
            </div>

            <div class="mySlides">
              <q>BOEC help students to find, select and pursue career they help me a lot in each and every step of my
                processing of Australia. I had a great experience with BOEC thank you soo much for providing me genuine
                counseling, undisputed love and care ! visit at least once at BOEC and feel the best thing.</q>
              <p class="author">- Jagriti Gautam</p>
            </div>


            <div class="mySlides">
              <q>BOEC is the best consultancy for applying abroad the team members and the staff are friendly to deal
                with. They suggest you the best things and refer you the best choice if you.</q>
              <p class="author">- Sabina Prajapati</p><br>
            </div>

            <div class="mySlides">
              <q>BOEC taking care of the clients and they are well organized as well. Moreover, the environment of the
                office is really friendly realistic guidance and genuine consultancy. </q>
              <p class="author">- Kalyan Paudal</p><br>
            </div>

            <div class="mySlides">
              <q>I was in dilemma after +2, I choose to go abroad for further career, then my best friend suggest me
                about the BOEC. We went to BOEC and observe for more than 1 week. I felt comfortable with the
                environment present there. Today I am so much happy that my career in present is awesome only because of
                guidance by BOEC. I was to thank my parents for believing in me for choosing this consultancy.</q>
              <p class="author">- Subash Gautam</p>
            </div>

            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- Start brands Area -->
   <!-- <section class="brands-area">
    <div class="container">
      <div class="brand-wrap">
        <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
          <div class="col single-brand">
            <a href="#"><img class="mx-auto" src="images/flag/newzealand.gif" alt="" height="70px" width="150px;"></a>
          </div>
          <div class="col single-brand">
            <a href="#"><img class="mx-auto" src="images/flag/us.gif" alt="" height="70px" width="150px;"></a>
          </div>
          <div class="col single-brand">
            <a href="#"><img class="mx-auto" src="images/flag/uk.gif" alt="" height="70px" width="150px;"></a>
          </div>
          <div class="col single-brand">
            <a href="#"><img class="mx-auto" src="images/flag/cyprus.gif" alt="" height="70px" width="150px;"></a>
          </div>
          <div class="col single-brand">
            <a href="#"><img class="mx-auto" src="images/flag/india.gif" alt="" height="70px" width="150px;"></a>
          </div>
        </div>
      </div>
    </div>
  </section> -->


  <!-- End brands Area -->

  <?php include 'includes/footer.php'; ?>