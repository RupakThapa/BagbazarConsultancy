<footer class="container-fluid" style="background-image:url('images/1234.jpg');bottom:0">
    <hr>
    <div class="container"><br><br>
      <div class="row">
        <div class="col-sm-4 countery">
          <h3 style="color:white; margin-bottom: 1rem;">About BOEC</h3>
          <p style="text-align: justify;color:#727272;  ">
            Baghbazar overseas educational center is one of the best education advisory service providers for the
            students who nurture a desire for an international degree, experience and exposure. We are professionals who
            have domain expertise and knowledge in the international education industry. We believe in assisting you in
            your endeavor for a higher education by providing you an honest, structured and prompt guidance. We
            understand individual situation or requirement and suggest option accordingly. 
          </p>
        </div>
      
        <div class="col-sm-4" style="color:#727272;">
          <h3 style="color:white; margin-bottom: 1rem;">What We Do?</h3>
          <ul>
            <li><a href="services.php" style="color:#727272;">Profile Evaluation</a></li>
            <li><a href="services.php" style="color:#727272;">Counseling</a></li>
            <li><a href="services.php" style="color:#727272;">University/College&amp;Course Selection</a></li>
            <li><a href="services.php" style="color:#727272;">Scholarship</a></li>
            <li><a href="services.php" style="color:#727272;">Application&amp;Documentations Procedure</a></li>
            <li><a href="services.php" style="color:#727272;">University/College Interview</a></li>
            <li><a href="services.php" style="color:#727272;">Financial Documents&amp;Tips</a></li>
            <li><a href="services.php" style="color:#727272;">Dependent/Sponser Visa</a></li>
            <li><a href="services.php" style="color:#727272;">Post Visa</a></li>
            <li><a href="services.php" style="color:#727272;">IELTS &amp; TOFEL</a></li>
          </ul>
        </div>
        <div class="col-sm-4">


  

          <div class="single-footer-widget">
            <h3 style="color:white; margin-bottom: 1rem;" class="countery">Newsletter</h3>
            <p style="color:#727272;">Stay updated with our latest trends</p>
            <div class="" id="mc_embed_signup">
              <form target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get">
                <div class="input-group">
                  <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required=""
                    type="email">
                  <div class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                    <i class="fa fa-angle-right"></i>
                    </button>
                  </div>
                  <div class="info"></div>
                </div>
              </form>
            </div>
            <div class="single-footer-widget" style="margin-top: 130px; margin-left: 100px;">

              <!-- <p>Let us be social</p> -->
              <div class="footer-social d-flex justify-content">
                <a href="https://www.facebook.com/boec.ktm9"><i class="fa fa-facebook fa-2x mr-3"></i></a>
                <a href="https://twitter.com/TechnologyGuras"><i class="fa fa-twitter fa-2x mr-3"></i></a>
                <a href="https://www.instagram.com/guras_technology/"><i class="fa fa-instagram fa-2x mr-3"></i></a>
                <a href="mailto:oecktm@gmail.com"><i class="fa fa-google fa-2x mr-3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="padding-bottom: 0px;">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
          <p style="color: white; margin-top: 18px; margin-left: -50px; font-size: 12px; color: gray;">© 2019 Bagbazar
            Overseas Educational Center. All rights reserved.</p>
        </div>

        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
          <p style="float: right; color: gray; margin-top: 18px; font-size: 14px;">Designed and developed by<a
              style=" color: red; text-shadow: 0 0 3px black;" href="https://www.gurastech.com"> Guras Technology Pvt.
              Ltd.</a></p>
        </div>
      </div>
    </div>
  </footer>


  
  <script>
    $(document).ready(function () {
      //Fade in delay for the background overlay (control timing here)
      $("#bkgOverlay").delay(4800).fadeIn(400);
      //Fade in delay for the popup (control timing here)
      $("#delayedPopup").delay(5000).fadeIn(400);

      //Hide dialouge and background when the user clicks the close button
      $("#btnClose").click(function (e) {
        HideDialog();
        e.preventDefault();
      });
    });
    //Controls how the modal popup is closed with the close button
    function HideDialog() {
      $("#bkgOverlay").fadeOut(400);
      $("#delayedPopup").fadeOut(300);
    }
    // lalalalala
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }



  </script>