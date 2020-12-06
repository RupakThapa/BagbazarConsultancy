<?php include 'includes/header.php'; 
include 'admin/includes/db.php'; 
?>

<?php include 'includes/navigation.php'; ?>

<style>
  /* Center website */
  .main {
    max-width: 1000px;
    margin: auto;
  }

  img {
    max-height: 300px
  }

  h1 {
    font-size: 50px;
    word-break: break-all;
  }

  p {
    font-family: 'Montserrat', sans-serif;
    color: #727272
  }

  .row {
    margin: 10px -16px;
  }

  /* Add padding BETWEEN each column */
  .row,
  .row>.column {
    padding: 8px;
  }

  /* Create three equal columns that floats next to each other */
  .column {
    float: left;
    width: 33.33%;
    display: none;
    /* Hide all elements by default */
  }

  /* Clear floats after rows */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Content */
  .content {
    background-color: white;
    padding: 10px;
  }

  /* Content */
  .content>img:hover {
    transform: scale(1.1);
  }

  /* The "show" class is added to the filtered elements */
  .show {
    display: block;
  }

  /* Style the buttons */
  .btn {
    border: none;
    outline: none;
    background-color: white;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #ddd;
  }

  .btn.active {
    background-color: #666;
    color: white;
  }
</style>
</head>

<body>








  <section class="container mt-5">
    <!-- MAIN (Center website) -->
    <div class="main">
   



      <div id="myBtnContainer">
        <button class="btn" onclick="filterSelection('events')"> Orientation</button>
        <button class="btn" onclick="filterSelection('products')"> Training classes</button>
        <button class="btn" onclick="filterSelection('staff')"> Other Programs</button>
      </div>

      <!-- Portfolio Gallery Grid -->
      <div class="row">
        <div class="column events">
          <div class="content">
            <img src="images/gallery/1.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/2.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/3.jpg" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/4.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/5.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/6.jpg" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/7.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/8.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/9.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/10.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/11.jpg" alt="Car" style="width:100%">
          </div>
        </div>

        <div class="column products">
          <div class="content">
            <img src="images/gallery/12.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/13.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/14.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/15.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/16.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/17.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/7.jpg" alt="Car" style="width:100%">

          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/18.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/19.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/20.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/21.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/22.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/23.jpg" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/24.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/25.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/26.jpg" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/27.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/28.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/29.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/30.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/31.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/32.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/33.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/34.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/35.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/36.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/37.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/38.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/39.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/40.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/41.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/42.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/43.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/44.jpg" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/45.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/46.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/47.jpg" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/48.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/49.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/50.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/52.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/53.jpg" alt="Car" style="width:100%">
          </div>
        </div>

        <div class="column products">
          <div class="content">
            <img src="images/gallery/54.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/55.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/56.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/57.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/58.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/59.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/60.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/61.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/19.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/62.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/63.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/64.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/65.jpg" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/66.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/67.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/68.jpg" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/69.jpg" alt="Lights" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/70.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/71.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/72.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/73.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/74.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/75.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/76.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/77.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/78.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/79.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/80.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/81.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/82.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/83.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column events">
          <div class="content">
            <img src="images/gallery/84.jpg" alt="events" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/85.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/86.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/87.jpg" alt="Car" style="width:100%">
          </div>
        </div>

        <div class="column products">
          <div class="content">
            <img src="images/gallery/88.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/89.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/90.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/91.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/92.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column products">
          <div class="content">
            <img src="images/gallery/93.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/94.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/95.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/96.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/97.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/98.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/99.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <div class="column staff">
          <div class="content">
            <img src="images/gallery/100.jpg" alt="Car" style="width:100%">
          </div>
        </div>
        <!-- END GRID -->
      </div>

      <!-- END MAIN -->
    </div>
  </section>
  <script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
  <div id="lightBox">
    <img id="lightBoxImage" src="" alt="" />
    <div id="prevImg"><span></span></div>
    <div id="nextImg"><span></span></div>
    <div id="closeLightbox-button"></div>
  </div>
  <script>
    window.onload = function () {

      var thumbsList = document.getElementById("thumbsList");
      var allLIs = thumbsList.getElementsByTagName("li");
      var allImages = thumbsList.getElementsByTagName("img");

      var TheLightBox = document.getElementById("lightBox");
      var ThelightBoxImage = document.getElementById("lightBoxImage");

      var prevImg = document.getElementById("prevImg");
      var nextImg = document.getElementById("nextImg");

      var numberOfImages = allLIs.length;
      var counter = 0;
      var currentImage = counter;

      function hasClass(el, className) {
        if (el.classList)
          return el.classList.contains(className)
        else
          return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'))
      }

      function addClass(el, className) {
        if (el.classList)
          el.classList.add(className)
        else if (!hasClass(el, className)) el.className += " " + className
      }

      function removeClass(el, className) {
        if (el.classList)
          el.classList.remove(className)
        else if (hasClass(el, className)) {
          var reg = new RegExp('(\\s|^)' + className + '(\\s|$)')
          el.className = el.className.replace(reg, ' ')
        }
      }

      ThelightBoxImage.setAttribute("src", (allImages[0].getAttribute("src")));

      function loadImageInLightBox(URL, callback) {
        var url = URL;
        ThelightBoxImage.setAttribute("src", url);
        if (typeof callback == "function") {
          callback();
        }
      }

      function loadLightBox() {
        addClass(TheLightBox, "lightBox-active");
        addClass(ThelightBoxImage, "active-image");
      }

      function unloadLightBox() {
        removeClass(TheLightBox, "lightBox-active");
        removeClass(ThelightBoxImage, "active-image");
      }

      function prevImage() {
        if (counter <= 0) {
          counter = numberOfImages;
        }
        counter--;
        loadImageInLightBox(allImages[counter].getAttribute("src"));
      }

      function nextImage() {
        counter++;
        if (counter == numberOfImages) {
          counter = 0;
        }
        loadImageInLightBox(allImages[counter].getAttribute("src"));
      }

      document.getElementById("lightBox").addEventListener("click", function (e) {
        switch (e.target.id) {
          case "prevImg":
            prevImage();
            break;
          case "nextImg":
            nextImage();
            break;
          case "lightBoxImage":
            break;
          default:
            unloadLightBox();
        }

      })

      for (var i = 0; i < allImages.length; i++) {
        allImages[i].setAttribute("id", "thumb_" + i);
        allImages[i].addEventListener("click",
          function (e) {
            var theIndex = e.target.id.match(/\d+/)[0];
            counter = theIndex;
            loadImageInLightBox(e.target.getAttribute("src"), function () {
              loadLightBox(e.target.getAttribute("src"));
            });
          }
        );
      }

    }
  </script>


<?php include 'includes/footer.php'; ?>