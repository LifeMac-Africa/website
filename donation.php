<?php
include('./include/header.php');
include('./include/navbar.php');
?>

        <!-- Image with Text under navbar -->
        <section class="slider-area">
    <div class="slider-active">
        <div class="single-slider slider-bg" data-background="images/ben-white-PAiVzSmYy-c-unsplash.jpg" style="background-image: url('images/ben-white-PAiVzSmYy-c-unsplash.jpg');">
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

        <!-- Image with Text under navbar -->
<div class="containern">
  <div class="donners-info">
    <h3>Great Donners</h3>
    <div class="profile-images">
      <div class="donner-item">
        <img src="./images/Founder & Executive Director.jpeg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/Director of Communications.jpeg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/person_1.jpg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/person_2.jpg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/person_3.jpg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/person_4.jpg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/person_3.jpg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/person_1.jpg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/person_2.jpg" alt="Profile Image">
      </div>
      <div class="donner-item">
        <img src="./images/person_4.jpg" alt="Profile Image">
      </div>
      <div class="donner-item donner-number">+286</div>
    </div>
  </div>

  <div class="donation-form">
    <div class="section-title">
      <h5 class="subtitle  mb-14">Make A Donation</h5>
      <h2 class="title text-white">Donate Now</h2>
    </div>
    <form>
      <div class="amount-info">
      <div class="donate-amount" data-amount="GHC50">GHC50</div>
      <div class="donate-amount" data-amount="GHC100">GHC100</div>
      <div class="donate-amount" data-amount="GHC200">GHC200</div>

        <div class="donate-amount donate-custom-amount active">
          <input class="form-control" type="text" placeholder="Custom">
        </div>
      </div>

      <div class="payment-method-wrp">
        <h4>Payment Method:</h4>
        <div class="payment-method">
          <div class="payment-type">
          <div class="check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1" id="offlineLabel">Offline</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
            <label class="form-check-label check" for="inlineRadio2" id="creditCardLabel">Credit Card</label>
            <img src="./images/visacard.jpg" alt="Credit Card" class="credit-card-icon">
            <img src="./images/0 KcSus6ZmvPhsKWnS.png" alt="Credit Card" class="credit-card-icon">
            <img src="./images/world-mastercard-card_1280x720.jpg" alt="Credit Card" class="credit-card-icon">
        </div>
          </div>
        </div>
      </div>

      <div class="personal-info">
        <h4>Personal Info:</h4>
        <div class="row row-gutter-20">
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" type="text" name="con_name" placeholder="Name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" type="email" name="con_email" placeholder="Email">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" type="text" name="con_phone" placeholder="Phone">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" type="text" name="con_address" placeholder="Address">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group mb-0">
              <textarea class="form-control textarea" name="con_message" placeholder="Message"></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="btn-wrp">
        <a href="#" class="btn-theme btn-gradient btn-slide">Donate Now</a>
      </div>
    </form>
  </div>
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
        <script src="./js/video.js"></script>

    