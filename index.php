<!DOCTYPE html>
<html lang="zxx">

<?php
include 'links2.php';
?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    /* card style start */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 80%;
      border-radius: 5px;
    }

    e .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    img {
      border-radius: 5px 5px 0 0;
    }

    .container {
      padding: 2px 16px;
    }


    .video-container {
      position: relative;
      width: 100%;
      padding-bottom: 1%;
      /* 16:9 aspect ratio */
      margin-bottom: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .video-container video {
      width: 100%;
      height: auto;
      max-width: 100%;
      max-height: 100%;
      object-fit: cover;
    }



    .carousel-item {
      -webkit-transition: 0s !important;
      -o-transition: 0s !important;
      transition: 0s !important;
      transition: -webkit-transform 0s ease-in-out !important;
      transition: transform 0s ease-in-out !important;
      transition: transform 0s ease-in-out, -webkit-transform 0s ease-in-out !important;


    }
  </style>
</head>

<body>





  <?php
  $page = 'index';
  include 'navbar2.php';
  ?>

  <!-- carousel start -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carousel/Homepage_3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

          <a class="btn btn-border btn-lg fs-5" style="background-color: green;color:white" href="#types_of_dances">Explore Now!</a>
          <a class="btn  btn-border btn-lg fs-5" style="background-color: green; color:white" href="#appointment">Book Now!</a>


        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carousel/Homepage_2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <a class="btn btn-border btn-lg fs-5" style="background-color: green;color:white" href="#types_of_dances">Explore Now!</a>
          <a class="btn  btn-border btn-lg fs-5" style="background-color: green; color:white" href="#appointment">Book Now!</a>

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carousel/Homepage_1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <a class="btn btn-border btn-lg fs-5" style="background-color: green;color:white" href="#types_of_dances">Explore Now!</a>
          <a class="btn  btn-border btn-lg fs-5" style="background-color: green; color:white" href="#appointment">Book Now!</a>

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- carousel ends -->


  <!-- About Section Begin -->
  <section class="home-about spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="home__about__pic">
            <div class="home__about__pic__item large-item set-bg" data-setbg="img/about/about_1.png"></div>
            <div class="home__about__pic__item">
              <div class="home__about__pic__item__inner set-bg" data-setbg="img/about/about_2.png"></div>
              <div class="home__about__pic__item__inner set-bg" data-setbg="img/about/about_3.png"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="home__about__text" style="padding-top : 0px ;">
            <div class="section-title">
              <!-- <img src="img/icon.png" alt="" /> -->
              <h2 style="margin: 0px; ">Welcome to Mayura Natyalayam - Mayura Academy of Dance</h2>
            </div>
            <!-- <span>“What hurts today makes you stronger tomorrow.”</span> -->
            <p style="color: black; text-align: justify;">

              Guru Bindiya Sabarinath, a well known exponent of Indian dance,
              received her early training in Bharatnatyam, Mohiniyattam and
              Kuchipudi from her Guru and mother Shrimati Krishnaveni,
              Bindiya. She is an alumni of Kalakshtera Chennai and is a
              pioneer in making principal styles of Indian Dance accessible to
              US residents. Bindiya received a Presidential Award for
              representing Mohiniyattam from Kerala on Republic Day in 1998.
              She has dedicated herself to teaching and performing Indian
              Classical Dance for the past twenty years. Bindiya established
              the Mayura school of Arts in 2000 in the US. She has over 1000
              students and many branches in the New York and New Jersey area.
              She has also toured with Indian movie artists and famous
              singers. She has performed throughout the US, Europe, Middle
              East and India.
            </p>

            <a href="about.php" class="primary-btn">MORE ABOUT US</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Chooseus Section Begin -->
  <section class="chooseus spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="chooseus__text">
            <h2>Why Choose Us</h2>
            <p>
              We are offering internationally certified 200 Hour Yoga Teacher
              Training in Rishikesh and 300 hour yoga teacher training in
              Rishikesh, India - Join us to have such life-transforming
              experience in The world capital of Yoga in Rishikesh.
            </p>
          </div>
          <div class="chooseus__item">
            <div class="chooseus__item__icon">
              <img src="img/chooseus/choose-1.png" alt="" />
            </div>
            <div class="chooseus__item__text">
              <h2 class="choose-counter">2146</h2>
              <p>Students</p>
            </div>
          </div>
          <div class="chooseus__item">
            <div class="chooseus__item__icon">
              <img src="img/chooseus/choose-2.png" alt="" />
            </div>
            <div class="chooseus__item__text">
              <h2 class="choose-counter">15</h2>
              <p>Years Of Experience</p>
            </div>
          </div>
          <div class="chooseus__item">
            <div class="chooseus__item__icon">
              <img src="img/chooseus/choose-3.png" alt="" />
            </div>
            <div class="chooseus__item__text">
              <h2 class="choose-counter">48</h2>
              <p>Branches</p>
            </div>
          </div>
          <div class="chooseus__item">
            <div class="chooseus__item__icon">
              <img src="img/chooseus/choose-4.png" alt="" />
            </div>
            <div class="chooseus__item__text">
              <h2 class="choose-counter">234</h2>
              <p>Expert Staffs</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="chooseus__pic">
            <img src="img/chooseus/choose_us.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Chooseus Section End -->

  <!-- Classes Section Begin -->
  <!-- <section class="upcoming-classes spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title normal-title">
              <h2>Upcoming Courses</h2>
              <p>
                The trainings are multi-style and you will learn and practice
                Hatha Vinyasa (flow)<br />
                and Yin Yoga.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="classes__item">
              <div
                class="classes__item__pic set-bg"
                data-setbg="img/classes/classes-1.jpg"
              >
                <span>20 Jun 2019</span>
              </div>
              <div class="classes__item__text">
                <p>14 Days | Start on 10th Every Month</p>
                <h4><a href="#">100 Hour Yoga Course Rishikesh</a></h4>
                <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                <a href="#" class="class-btn">JOIN NOW</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="classes__item">
              <div
                class="classes__item__pic set-bg"
                data-setbg="img/classes/classes-2.jpg"
              >
                <span>20 Jun 2019</span>
              </div>
              <div class="classes__item__text">
                <p>14 Days | Start on 10th Every Month</p>
                <h4><a href="#">200 Hour Yoga Course Rishikesh</a></h4>
                <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                <a href="#" class="class-btn">JOIN NOW</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="classes__item">
              <div
                class="classes__item__pic set-bg"
                data-setbg="img/classes/classes-3.jpg"
              >
                <span>20 Jun 2019</span>
              </div>
              <div class="classes__item__text">
                <p>14 Days | Start on 10th Every Month</p>
                <h4><a href="#">300 Hour Yoga Course Rishikesh</a></h4>
                <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                <a href="#" class="class-btn">JOIN NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  <!-- Classes Section End -->

  
 <!-- Type of dance -->
 <section class="types_of_dances" id="types_of_dances">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">Types of Dance</h2>
        </div>
      </div>
    </div>


    <div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-4 col-lg-4 col-sm-6 mt-4 d-flex justify-content-center">
      <div class="card card-wide">
        <img src="img/dance-types/7.png" alt="Avatar" style="width: 100%" />
        <div class="container">
          <h4 class="text-center pt-2 pb-2"><b>Bharatnatyam</b></h4>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-6 mt-4 d-flex justify-content-center">
      <div class="card">
        <img src="img/dance-types/Mohiniyattom_performance.png" alt="Avatar" style="width: 100%" />
        <div class="container">
          <h4 class="text-center pt-2 pb-2"><b>Mohiniyattom</b></h4>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-6 mt-4 d-flex justify-content-center">
      <div class="card">
        <img src="img/dance-types/folkdance.png" alt="Avatar" style="width: 100%" />
        <div class="container">
          <h4 class="text-center pt-2 pb-2"><b>FolkDance</b></h4>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-4 col-lg-4 col-sm-6 mt-4 d-flex justify-content-center">
      <div class="card">
        <img src="img/dance-types/bollywood.png" alt="Avatar" style="width: 100%" />
        <div class="container">
          <h4 class="text-center pt-2 pb-2"><b>Bollywood</b></h4>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-6 mt-4 d-flex justify-content-center">
      <div class="card">
        <img src="img/dance-types/contemporary and fusion.png" alt="Avatar" style="width: 100%" />
        <div class="container">
          <h4 class="text-center pt-2 pb-2"><b>Contemporary</b></h4>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-lg-4 col-sm-6 mt-4 d-flex justify-content-center">
      <div class="card">
        <img src="img/dance-types/semiclassical.png" alt="Avatar" style="width: 100%" />
        <div class="container">
          <h4 class="text-center pt-2 pb-2"><b>SemiClassical</b></h4>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container pt-5 text-center">
  <div class="row justify-content-center">
    <div class="col-md-4 col-lg-4 mt-4 d-flex justify-content-center">
      <div class="card">
        <img src="images/feather.png" alt="Avatar" style="width: 100%" />
      </div>
    </div>
    <div class="col-md-4 col-lg-4 mt-4 d-flex justify-content-center">
      <div class="card">
        <img src="img/dance-types/kuchipudi.png" alt="Avatar" style="width: 100%" />
        <div class="container">
          <h4 class="text-center pt-2 pb-2"><b>Kuchipudi</b></h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-4 mt-4 d-flex justify-content-center">
      <div class="card">
        <img src="images/feather2.png" alt="Avatar" style="width: 100%" />
      </div>
    </div>
  </div>
</div>

  </section>
  <!-- Type of dance end -->

  <br><br>
  <!-- Gallery Section Begin -->
  <section class="gallery ">
    <!--style="background: #f5f6fa;">-->

    <!--style="background: #f5f6fa;">-->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title normal-title">
            <h2>Our Gallery</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic p-2">
            <img src="img/gallery/2.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic p-2">
            <img src="img/gallery/1.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic p-2">
            <img src="img/gallery/3.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic p-2">
            <img src="img/gallery/4.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic p-2">
            <img src="img/gallery/5.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic p-2">
            <img src="img/gallery/6.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic p-2">
            <img src="img/gallery/7.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic p-2">
            <img src="img/gallery/8.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Gallery Section End -->

  <!-- video section start -->
  <section class="instructor spad">
    <div class="container">
      <div class="row">
        <!--<h2 class="text-center">Video Section</h2>-->
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="video-container">
            <video src="assets/videos/mayura_dance_about.mp4" autoplay muted loop playsinline controls></video>
          </div>
        </div>
        <div class="col-lg-2">

        </div>
      </div>
    </div>


  </section>

  <!-- video section  End -->

  <!-- Team Section Begin -->
  <section class="ins">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title normal-title">
            <h2>Meet Our Instructors</h2>
            <!--<p style="color: black">-->
            <!--  Our Indian and western teachers are highly qualified and will be-->
            <!--  happy to share this<br />-->
            <!--  spiritual journey with you.-->
            <!--</p>-->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="instructor__item">
            <div class="instructor__item__pic">
              <img src="img/instructor/1.png" alt="" />
            </div>
            <div class="instructor__item__text">
              <h5>Trainer</h5>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="instructor__item">
            <div class="instructor__item__pic">
              <img src="img/instructor/2.png" alt="" />
            </div>
            <div class="instructor__item__text">
              <!-- <h5>Rebecca James</h5> -->
              <h5>Trainer</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="instructor__item">
            <div class="instructor__item__pic">
              <img src="img/instructor/3.png" alt="" />
            </div>
            <div class="instructor__item__text">
              <!-- <h5>Melissa Smith</h5> -->
              <h5> Trainer</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="instructor__item">
            <div class="instructor__item__pic">
              <img src="img/instructor/4.png" alt="" />
            </div>
            <div class="instructor__item__text">
              <!-- <h5>Emily Walker</h5> -->
              <h5> Trainer</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Team Section End -->

  <!-- Appoinment Section Begin -->
  <section class="appointment spad" id="appointment">
    <div class="container">
      <div class="appointment__text">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <!-- <img src="img/icon-white.png" alt="" /> -->
              <h2>Join The Dance Class</h2>
            </div>
          </div>
        </div>
        <form action="#" class="appointment__form">
          <div class="row">
            <div class="col-lg-6">
              <input type="text" style="font-weight:bold;" placeholder="Name" />
            </div>
            <div class="col-lg-6">
              <input type="text" style="font-weight:bold;" placeholder="Email" />
            </div>
            <div class="col-lg-6">
              <input type="text" style="font-weight:bold;" placeholder="Phone" />
            </div>
            <div class="col-lg-6">
              <!--<select class="class-select">-->
              <!--  <option value="">Choose Your Class</option>-->
              <!--</select>-->
              <select class="class-select" style="font-weight:bold;">
                <option value="" style="font-weight:bold;">-- Choose Your Class --</option>
                <option value="bharatanatyam">Bharatnatyam</option>
                <option value="kuchipudi">Kuchipudi</option>
                <option value="Mohiniyattam">Mohiniyattam</option>
                <option value="FolkDance">Folk Dance</option>
                <option value="SemiClassic">Semi Classic</option>
                <option value="Contemporary and Fusion">Contemporary and Fusion</option>
                <option value="bollywood">Bollywood</option>

              </select>
            </div>
            <div class="col-lg-12 text-center">
              <textarea placeholder="Message" style=" font-weight:bold;"></textarea>
              <button type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- Appoinment Section End -->
  <!-- Testimonial Section End -->
  <section class="our_branches" style="background-color:#f5f6fa">
    <!-- Type of dance -->
    <!-- Type of dance -->
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">Our Branches</h2>
        </div>
      </div>
    </div>
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xm-12">
          <div class="card mx-auto text-center">
            <div class="card-body">
              <h2>BERGENFIELD</h2>
              <h5>MAIN OFFICE</h5>
              <h5>93F SOUTH RAILROAD AVE, BERGENFIELD</h5>
            </div>
            <center>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.5813064633135!2d-74.00091452406677!3d40.92492537136237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f044d31927a3%3A0x6ee307671b9648b3!2sMayura%20School%20of%20Arts!5e0!3m2!1sen!2sin!4v1689405462962!5m2!1sen!2sin" width="260" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
            <!-- here -->
          </div>
          <p class="text-center text-dark pt-3">Tue: 6:30PM- 8:00PM</p>
          <p class="text-center text-dark">Sun: 2:00PM- 8:00PM</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xm-12">
          <div class="card mx-auto text-center">
            <div class="card-body">
              <h2>ROCKLAND COUNTY</h2>
              <h5>5 CLUB HOUSE LANE, STONY POINT,</h5>
              <!-- <h5 class="text-center">NEW YORK 10980</h5> -->
            </div>
            <center>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.8940330078176!2d-74.03098062405127!3d41.224079671321036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2c4cd6018593d%3A0x5e3e1f0f6b1875fe!2s5%20Club%20House%20Ln%2C%20Stony%20Point%2C%20NY%2010980%2C%20USA!5e0!3m2!1sen!2sin!4v1689349345897!5m2!1sen!2sin" width="260" height="195" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
            <!-- here -->
          </div>
          <p class="text-center text-dark pt-3">Sat: 8:30 AM-11:30 PM</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xm-12">
          <div class="card mx-auto text-center">
            <div class="card-body">
              <h2>ALBANY, NY</h2>
              <h5>450 ALBANY SHAKER ROAD,</h5>
              <h5>ALBANY NY</h5>
            </div>
            <center>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.682410201576!2d-73.77760877157435!3d42.70154501062597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de0b8b97d3c9c3%3A0x2f7081f2de2efad4!2s450%20Albany%20Shaker%20Rd%2C%20Albany%2C%20NY%2012211%2C%20USA!5e0!3m2!1sen!2sin!4v1689349474061!5m2!1sen!2sin" width="260" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
            <!-- here -->
          </div>
          <p class="text-center text-dark pt-3">Thu: 5:30 PM-8:00 PM</p>
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <!-- Footer Section Begin -->
  <?php
  include 'footer.php';
  ?>
  <!-- Footer Section End -->


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 3000, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom',
    });
  </script>

  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.barfiller.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>