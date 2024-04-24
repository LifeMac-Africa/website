<?php
include('./include/header.php');
include('./include/navbar.php');
?>

<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider slider-bg" data-background="images/ben-white-PAiVzSmYy-c-unsplash.jpg" >
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-content text-center">
                        <h2>Making a Difference, One Step at a Time</h2>
                        <h6>Join our mission to create a better world for all.</h6>
                            <div class="slider-btn">
                                <a href="./donation.php" class="btn black-btn">Donate<i class="bi bi-arrow-through-heart-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Stories Section -->
<section id="impact-stories" class="section">
    <h1>Impact Stories</h1>

    <!-- Content -->
    <div class="content">
      <p>Impact stories showcase the difference made by individuals or organizations in various communities and sectors. These stories inspire, educate, and motivate people to take action.</p>

      <p>Here are some impact stories that highlight positive changes and innovations:</p>

      <ul>
        <li>Story 1: How a community garden transformed a neighborhood.</li>
        <li>Story 2: Education initiatives improving literacy rates.</li>
        <li>Story 3: Clean energy projects reducing carbon footprints.</li>
      </ul>

      <!-- YouTube Video -->
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/YOUTUBE_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </section>


  <style>


nav ul {
  list-style-type: none;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  padding: 10px;
}

.section {
  padding: 20px;
}

.content {
  margin-top: 20px;
}

.video-container {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
  padding-top: 30px;
  height: 0;
  overflow: hidden;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

  </style>

  <?php
include('./include/footer.php');
?>

		<!-- JS here -->
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/bootstrap-datepicker.min.js"></script>
        <script src="./js/isotope.pkgd.min.js"></script>
        <script src="./js/imagesloaded.pkgd.min.js"></script>
        <script src="./js/jquery.magnific-popup.min.js"></script>
        <script src="./js/jquery.odometer.min.js"></script>
        <script src="./js/jquery.easypiechart.min.js"></script>
        <script src="./js/jquery-ui.min.js"></script>
        <script src="./js/jquery.inview.min.js"></script>
        <script src="./js/jquery.appear.js"></script>
        <script src="./js/slick.min.js"></script>
        <script src="./js/wow.min.js"></script>
        <script src="./js/main.js"></script>
    




