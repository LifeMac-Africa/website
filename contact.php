<?php
include('./include/header.php');
include('./include/navbar.php');
?>

        <!-- Image with Text under navbar -->
        <section class="slider-area">
    <div class="slider-active">
        <div class="single-slider slider-bg" data-background="images/slider_bg01.jpg" style="background-image: url('images/blog_img01.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-content text-center">
                        <h2>Making a Difference, One Step at a Time</h2>
                        <h6>Join our mission to create a better world for all.</h6>
                            <div class="slider-btn">
                                <a href="#" class="btn black-btn">Donate<i class="bi bi-arrow-through-heart-fill "></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Image with Text under navbar -->

 
        <!-- Contact form -->
        <div class="container1">
        <form action="submit.php" method="POST">
            <h2>Contact Us</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Submit</button>
        </form>
        </div>



     
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
    