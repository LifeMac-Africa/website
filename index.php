<?php
include('./include/header.php');
include('./include/navbar.php');
include ('./config.php');      //Map API Configurations link here 
?>


        <!-- main-area -->
 <main>
        <!-- Image with Text under navbar -->
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



<!-- Mission, Vission and Core value session -->

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="category-item">
                <img src="./images/dart-mission-goal-success-svgrepo-com.svg" class="card-img-top" alt="Mission Image">
                <div class="cardb">
                    <h5 class="card1">Mission</h5>
                    <p class="card1">Empowering communities through diverse initiatives for sustainable development.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="category-item">
                <img src="./images/vision-svgrepo-com(1).svg" class="card-img-top" alt="Vision Image">
                <div class="cardb">
                    <h5 class="card1">Vision</h5>
                    <p class="card1">Fostering futures where our collective efforts drive global well-being and prosperity.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="category-item">
                <img src="./images/value-proposition-offer-value-submit-a-proposal-offer-a-benefit-svgrepo-com.svg" class="card-img-top" alt="Core Value Image">
                <div class="cardb">
                    <h5 class="card1">Core Value</h5>
                    <p class="card1">Our identity, LIFE-MAC, is an acronym coined from the initial letters of our core values.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Mission, Vission and Core value session -->





        <!-- Image with Text under navbar -->
               <!-- Video Start -->
<div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5">
                <h6 class="section-title text-start text-white text-uppercase mb-3">LIFE-MAC AFRICA</h6>
                <h1 class="text-white mb-4">LIFE-MAC AFRICA</h1>
                <p class="text-white mb-4">Together We Rise: Uniting Hearts, Changing Lives. Join us in celebrating the power of compassion and solidarity. Through your kindness, we're creating a world where no one is left behind. Share the joy of giving and be part of something truly extraordinary</p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Impact stories</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoModal" onclick="playYouTubeVideo('mPRXhNFPgwo')">
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Life-Mac Africa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Start -->

<script>
    function playYouTubeVideo(videoId) {
        var iframe = document.getElementById('video');
        iframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
    }
</script>






            
            <!-- project-area -->
            <section class="project-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-55">
                                
                                <h2 class="title">LATEST CAMPAIGN</h2>
                            </div>
                        </div>
                    </div>
                     <!-- Feature 1-->
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <a href="#"><img src="./images/ocg-saving-the-ocean-rXjzIsQAQ-w-unsplash.jpg" alt=""></a>
                                    <a href="#" class="tag">Evironment clean-up campaign</a>
                                </div>
                                <div class="project-content">
                                    <h2 class="title"><a href="#">To prove kindness of nation charity is the simple method</a></h2>
                                    <div class="progress-bar-details">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="cause-amounts row">
                                            <div class="col-6">
                                                <!-- CMS backend will happen here -->
                                            </div>
                                            <div class="col-6">
                                                <!-- CMS backend will happen here -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-meta">
                                        <ul>
                                           <!-- CMS backend will happen here -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Feature 2-->
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <a href="#"><img src="./images/brian-yurasits-5fbJMCzqNDs-unsplash.jpg" alt=""></a>
                                    <a href="#" class="tag">Water purification campaign</a>
                                </div>
                                <div class="project-content">
                                    <h2 class="title"><a href="#">Helping wisely to give donation In critical situation</a></h2>
                                    <div class="progress-bar-details">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="cause-amounts row">
                                            <div class="col-6">
                                                <!-- CMS backend will happen here -->
                                            </div>
                                            <div class="col-6">
                                                <!-- CMS backend will happen here -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-meta">
                                        <ul>
                                           <!-- CMS backend will happen here -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Feature 3-->
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <a href="#"><img src="images/project_img03.jpg" alt=""></a>
                                    <a href="#" class="tag">Charity campaign</a>
                                </div>
                                <div class="project-content">
                                    <h2 class="title"><a href="#">A small charity has a big impact In the full society</a></h2>
                                    <div class="progress-bar-details">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="cause-amounts row">
                                            <div class="col-6">
                                               <!-- CMS backend will happen here -->
                                            </div>
                                            <div class="col-6">
                                               <!-- CMS backend will happen here -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-meta">
                                        <ul>
                                           <!-- CMS backend will happen here -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Feature 4 -->
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <a href="#"><img src="./images/katt-yukawa-K0E6E0a0R3A-unsplash.jpg" alt=""></a>
                                    <a href="./donation.php" class="tag">Charity Donation campaign</a>
                                </div>
                                <div class="project-content">
                                    <h2 class="title"><a href="#">Charity is a simple method to prove kindness of nation</a></h2>
                                    <div class="progress-bar-details">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="cause-amounts row">
                                            <div class="col-6">
                                                <!-- CMS backend will happen here -->
                                            </div>
                                            <div class="col-6">
                                                <!-- CMS backend will happen here -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-meta">
                                        <ul>
                                            <!-- CMS backend will happen here -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- Feature 5-->
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <a href="#"><img src="./images/priscilla-du-preez-gYdjZzXNWlg-unsplash.jpg" alt=""></a>
                                    <a href="#" class="tag">Girls Girls campaign</a>
                                </div>
                                <div class="project-content">
                                    <h2 class="title"><a href="#">Charity is a simple method to prove kindness of nation</a></h2>
                                    <div class="progress-bar-details">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="cause-amounts row">
                                            <div class="col-6">
                                                <!-- CMS backend will happen here -->
                                            </div>
                                            <div class="col-6">
                                                <!-- CMS backend will happen here -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-meta">
                                        <ul>
                                            <!-- CMS backend will happen here -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                            <!-- Feature 6 -->
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <a href="#"><img src="images/project_img06.jpg" alt=""></a>
                                    <a href="./JoinUs.php" class="tag">School Mentor campaign</a>
                                </div>
                                <div class="project-content">
                                    <h2 class="title"><a href="#">Charity is a simple method to prove kindness of nation</a></h2>
                                    <div class="progress-bar-details">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="cause-amounts row">
                                            <div class="col-6">
                                               <!-- CMS backend will happen here -->
                                            </div>
                                            <div class="col-6">
                                               <!-- CMS backend will happen here -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-meta">
                                        <ul>
                                           <!-- CMS backend will happen here -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      

                    </div>
                    <!-- <div class="more-project text-center mt-20">
                        <a href="#" class="btn">More Projects <span>+</span></a>
                    </div> -->
                </div>
            </section>
            <!-- project-area-end -->

            




            
            <!-- counter-area -->
            <section class="counter-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-img">
                                    <img src="images/counter_icon01.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h2 class="count"><span class="odometer odometer-auto-theme" data-count="184"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div></span>K</h2>
                                    <p>Projects Completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-img">
                                    <img src="images/counter_icon02.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h2 class="count"><span class="odometer odometer-auto-theme" data-count="10"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>M</h2>
                                    <p>Active campaign</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-img">
                                    <img src="images/counter_icon03.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h2 class="count"><span class="odometer odometer-auto-theme" data-count="20"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>K</h2>
                                    <p>Categories Served</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-img">
                                    <img src="images/counter_icon04.png" alt="">
                                </div>
                                <div class="counter-content">
                                    <h2 class="count"><span class="odometer odometer-auto-theme" data-count="90"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>M</h2>
                                    <p>Ideas Raised Funds</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- counter-area-end -->

            <!-- cta-area -->
            <section class="cta-area cta-bg">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="cta-img">
                                <img src="./images/Rectangle-7-18.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="cta-content">
                                <div class="section-title mb-25">
                                    <span class="sub-title">Life-Mac Africa</span>
                                    <h4 class="title">We are Life-Mac Africa Charity Foundation</h4>
                                </div>
                                <p>At LIFE-MAC Africa, we foster an inclusive culture by embracing diversity and supporting employees from diverse backgrounds. Through our comprehensive initiatives aligned with the UN Global Goals, we provide opportunities for all to contribute and thrive, regardless of background. Together, we work towards driving positive societal change and creating a brighter, more inclusive future for all.</p>
                                <ul class="cta-list">
                                <ul>
                                    <li>
                                        <i class="bi bi-megaphone-fill"  style="color:greenyellow"></i> 
                                        <span style="margin-left: 8px;">Raise funds with a Life-Mac Africa campaign</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-megaphone-fill" style="color:greenyellow"></i> 
                                        <span style="margin-left: 8px;">Extend your campaign with Life-Mac Africa</span>
                                    </li>
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta-area-end -->






          <!-- testimonial-area -->
<section class="testimonial-area gray-bg pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-5">
                <div class="section-title title-style-two mb-50">
                    <span class="sub-title">Life-Mac Africa</span>
                    <h2 class="title">Testimonial</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="section-text mb-50">
                    <p>LIFE-MAC Africa is not just an organization; it's a beacon of hope and change for children in need. Our commitment to creating a sustainable and inclusive society extends to the most vulnerable among us - the children.

Charity children, often coming from disadvantaged backgrounds, face numerous challenges that hinder their access to education, health care, and a safe environment. Many of these children are affected by poverty, lack of resources, and social exclusion.</p>
                </div>
            </div>
        </div>
        <!-- Card one -->
        <div class="row testimonial-active slick-initialized slick-slider slick-dotted">
            <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
                    <div class="col-lg-4 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 400px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <p>Thanks to LIFE-MAC Africa, my child has access to quality education and healthcare that we couldn't afford otherwise. They not only focus on academics but also teach life skills that are essential for my child's future. I am grateful for their commitment to helping children from disadvantaged backgrounds like ours</p>
                            </div>
                            <div class="testi-avatar-wrap">
                                <div class="testi-avatar-info">
                                    <div class="testi-avatar-thumb">
                                        <img src="./images/Founder & Executive Director.jpeg" alt="">
                                    </div>
                                    <div class="testi-avatar-content">
                                        <div class="content">
                                            <h2 class="title">Courage</h2>
                                            <p>Founder Of Life-Mac Africa</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-icon">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card two -->
                    <div class="col-lg-4 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 400px;" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <p>LIFE-MAC Africa's technology training program has been a game-changer for my daughter. She has learned valuable digital skills that are empowering her to pursue opportunities in the digital economy. Their focus on gender empowerment and social inclusion ensures that every child gets an equal chance to succeed.</p>
                            </div>
                            <div class="testi-avatar-wrap">
                                <div class="testi-avatar-info">
                                    <div class="testi-avatar-thumb">
                                        <img src="./images/Director of Communications.jpeg" alt="">
                                    </div>
                                    <div class="testi-avatar-content">
                                        <div class="content">
                                            <h2 class="title">Miranda H. Halim</h2>
                                            <p>Founder Of Yokoloko</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-icon">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card three -->
                    <div class="col-lg-4 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <p>The impact of LIFE-MAC Africa's work goes beyond just charity; they are building sustainable communities for our children's future. Their initiatives in Climate and Agriculture, Rural Development, and Governance are creating a better environment for our children to grow up in. I am proud to be part of such a visionary community.</p>
                            </div>
                            <div class="testi-avatar-wrap">
                                <div class="testi-avatar-info">
                                    <div class="testi-avatar-thumb">
                                        <img src="./images/Director of Communications.jpeg" alt="">
                                    </div>
                                    <div class="testi-avatar-content">
                                        <div class="content">
                                            <h2 class="title">Life-Mac Junior</h2>
                                            <p>Founder Of Life-Mac Africa</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-icon">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
     <!-- Map  -->
<div id="map-container">
    <iframe
        src="<?php echo $embedUrl; ?>"
        width="100%"
        height="60vh"
        title="Map"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        style="border:0; position:absolute; top:0; left:0; width:100%; height:100%;"
    ></iframe>
</div>

</section>
<!-- testimonial-area-end -->

</main>
<!-- main-area-end -->


       


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
           <!-- Video Js -->
        <script src="./js/video.js"></script>
 
</body>















