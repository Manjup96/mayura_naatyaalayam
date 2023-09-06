<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Directing Template" />
  <meta name="keywords" content="Directing, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dance</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" />

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
  <link rel="stylesheet" href="css/barfiller.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<style>
  /* card style start */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    width: 80%;
    border-radius: 5px;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  img {
    border-radius: 5px 5px 0 0;
  }

  .container {
    padding: 2px 16px;
  }

  /* card style end */
</style>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Offcanvas Menu Begin -->
  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu">
    <div class="offcanvas__logo">
      <a href="./index.html"><img src="img/logo.png" alt="" /></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__widget">
      <ul>
        <li>CALL US: + 1 800-567-8990</li>
        <li>WRITE US: OFFICE@EXAMPLE.COM</li>
        <li>OPENING TIMES: MON - FRI: 9:00 - 19:00</li>
      </ul>
      <a href="#" class="primary-btn">JOIN US</a>
    </div>
    <nav class="header__menu">
      <ul class="mobile-menu">
        <li class="active"><a href="./index.php">Home</a></li>
        <li><a href="./about-us.html">About</a></li>
        <li><a href="./classes.html">Classes</a></li>
        <li>
          <a href="#">Pages</a>
          <ul class="dropdown">
            <li><a href="./classes-details.html">Classes Details</a></li>
            <li><a href="./blog-details.html">Blog Details</a></li>
            <li><a href="./pricing.html">Pricing</a></li>
            <li><a href="./faq.html">Faq</a></li>
          </ul>
        </li>
        <li><a href="./blog.html">Blog</a></li>
        <li><a href="./contact.html">Contact</a></li>
      </ul>
    </nav>
    <div class="offcanvas__social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
  </div>
  <!-- Offcanvas Menu End -->

  <!-- Header Section Begin -->
  <!-- <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3">
              <div class="header__logo">
                <a href="./index.html"><img src="img/logo.png" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9">
              <div class="header__top__widget">
                <ul>
                  <li>CALL US: + 1 800-567-8990</li>
                  <li>WRITE US: OFFICE@EXAMPLE.COM</li>
                  <li>OPENING TIMES: MON - FRI: 9:00 - 19:00</li>
                </ul>
                <a href="#" class="primary-btn">JOIN US</a>
              </div>
            </div>
          </div>
          <div class="canvas__open">
            <i class="fa fa-bars"></i>
          </div>
        </div>
      </div>
      <div class="header__nav">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9">
              <nav class="header__menu">
                <ul>
                  <li class="active"><a href="./index.html">Home</a></li>
                  <li><a href="./about-us.html">About</a></li>
                  <li><a href="./gallery.html">Gallery</a></li>
                  <!-- <li><a href="./classes.html">Classes</a></li>
                  <li>
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                      <li><a href="./classes-details.html">Classes Details</a></li>
                      <li><a href="./blog-details.html">Blog Details</a></li>
                      <li><a href="./pricing.html">Pricing</a></li>
                      <li><a href="./faq.html">Faq</a></li>
                    </ul>
                  </li>
                  <li><a href="./blog.html">Blog</a></li> -->
  <!-- <li><a href="./contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-3 col-md-3">
              <div class="header__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header> -->
  <!-- Header Section End -->


  <?php
  include 'navbar2.php';
  ?>




  <!-- Hero Section Begin -->
  <!-- <section class="hero">
    <div class="hero__sliders owl-carousel">
      <div class="hero__items set-bg" data-setbg="img/hero/7.png">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="hero__text">
                <span>Welcome to Zogin</span>
                <h2>What hurts today makes you stronger tomorrow</h2>
                <a href="#" class="primary-btn">DISCOVER MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero__items set-bg" data-setbg="img/hero/5.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="hero__text">
                <span>Welcome to Zogin</span>
                <h2>What hurts today makes you stronger tomorrow</h2>
                <a href="#" class="primary-btn">DISCOVER MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="hero__text">
                <span>Welcome to Dance</span>
                <h2>What hurts today makes you stronger tomorrow</h2>
                <a href="#" class="primary-btn">DISCOVER MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Hero Section End -->


  <!-- carousel start -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active" >
        <img src="images/new_pic/bg_1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight">Welcome to the Sounds of the Forest and Hear the Birds Sing!</h5>
          <h5 class="animated bounceInLeft" style="font-size:30px;animation-delay:2s;">Discover Incredible Kings Sanctuary</h5>
          <a class="btn btn-primary btn-border btn-lg fs-5" href="facilities-jlr-kings-sanctuary.html">Explore Now!</a>
          <a class="btn  btn-primary btn-border btn-lg fs-5" href="reservation.html">Book Now!</a>
          
        </div>
      </div>
   <div class="carousel-item">
        <img src="images/new_pic/bg_2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="animation-delay:1s;font-size:30px;">Welcome to the Sounds of the Forest and Hear the Birds Sing!</h5>
          <h5 class="animated bounceInLeft" style="font-size:30px;animation-delay:2s;">Discover Incredible Kings Sanctuary</h5>
          <a class="btn btn-primary btn-border btn-lg fs-5" href="facilities-jlr-kings-sanctuary.html">Explore Now!</a>
          <a class="btn   btn-primary btn-border btn-lg fs-5" href="reservation.html">Book Now!</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/new_pic/bg_3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="font-size:30px;">Welcome to the Sounds of the Forest and Hear the Birds Sing!</h5>
          <h5 class="animated bounceInLeft" style="font-size:30px;animation-delay:2s;">Discover Incredible Kings Sanctuary</h5>
          <a class="btn btn btn-primary btn-border btn-lg fs-5" href="facilities-jlr-kings-sanctuary.html">Explore Now!</a>
          <a class="btn   btn-primary btn-border btn-lg fs-5" href="reservation.html">Book Now!</a>
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
          <div class="home__about__text">
            <div class="section-title">
              <!-- <img src="img/icon.png" alt="" /> -->
              <h2>Welcome to Mayura Natyalayam - Mayura Academy of Dance</h2>
            </div>
            <!-- <span>“What hurts today makes you stronger tomorrow.”</span> -->
            <p style="color: black">
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

            <a href="#" class="primary-btn">MORE ABOUT US</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Services Section Begin -->
  <!-- <section class="services spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <img src="img/icon.png" alt="" />
              <h2>Enjoy All Aspects Of Yoga</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="services__list">
          <div class="row">
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div class="services__item">
                <img src="img/services/services-1.png" alt="" />
                <h5>Asana</h5>
                <p>
                  Grab the opportunity to deepen your own yoga practice, relax,
                  restore and experience india!
                </p>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div class="services__item">
                <img src="img/services/services-2.png" alt="" />
                <h5>Meditation</h5>
                <p>
                  Grab the opportunity to deepen your own yoga practice, relax,
                  restore and experience india!
                </p>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div class="services__item">
                <img src="img/services/services-3.png" alt="" />
                <h5>Mudra</h5>
                <p>
                  Grab the opportunity to deepen your own yoga practice, relax,
                  restore and experience india!
                </p>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div class="services__item">
                <img src="img/services/services-4.png" alt="" />
                <h5>Bandhas</h5>
                <p>
                  Grab the opportunity to deepen your own yoga practice, relax,
                  restore and experience india!
                </p>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div class="services__item">
                <img src="img/services/services-5.png" alt="" />
                <h5>Philosophy</h5>
                <p>
                  Grab the opportunity to deepen your own yoga practice, relax,
                  restore and experience india!
                </p>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div class="services__item">
                <img src="img/services/services-6.png" alt="" />
                <h5>Pranayama</h5>
                <p>
                  Grab the opportunity to deepen your own yoga practice, relax,
                  restore and experience india!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  <!-- Services Section End -->

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

  <div class="container pt-5">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">Types of Dance</h2>
      </div>
    </div>
  </div>

  <div class="container pt-5">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card card-wide">
          <img src="img/dance-types/7.png" alt="Avatar" style="width: 100%" />
          <div class="container">
            <h4 class="text-center pt-2 pb-2"><b>Bharatnatyam</b></h4>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/dance-types/Mohiniyattom_performance.png" alt="Avatar" style="width: 100%" />
          <div class="container">
            <h4 class="text-center pt-2 pb-2"><b>Mohiniyattom</b></h4>
            <!-- <p>Interior Designer</p> -->
          </div>
        </div>
      </div>

      <div class="col-md-4">
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
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="img/dance-types/bollywood.png" alt="Avatar" style="width: 100%" />
          <div class="container">
            <h4 class="text-center pt-2 pb-2"><b>Bollywood</b></h4>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/dance-types/contemporary and fusion.png" alt="Avatar" style="width: 100%" />
          <div class="container">
            <h4 class="text-center pt-2 pb-2"><b>Contemporary</b></h4>
            <!-- <p>Interior Designer</p> -->
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="img/dance-types/semiclassical.png" alt="Avatar" style="width: 100%" />
          <div class="container">
            <h4 class="text-center pt-2 pb-2"><b>SemiClassical</b></h4>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center pt-5">
        <div class="card">
          <img src="img/dance-types/kuchipudi.png" alt="Avatar" style="width: 100%" />
          <div class="container">
            <h4 class="text-center pt-2 pb-2"><b>Kuchipudi</b></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Type of dance end -->

  <!-- Gallery Section Begin -->
  <section class="gallery pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title normal-title">
            <h2>Our Gallery</h2>
            <p style="color: black">
              This is the beautiful dance that have shared their journey and
              growth with<br />
              us. Take a look!
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic">
            <img src="img/gallery/2.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic">
            <img src="img/gallery/1.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic">
            <img src="img/gallery/3.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic">
            <img src="img/gallery/4.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic">
            <img src="img/gallery/5.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic">
            <img src="img/gallery/6.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic">
            <img src="img/gallery/7.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 p-0">
          <div class="gallery__pic">
            <img src="img/gallery/8.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Gallery Section End -->

  <!-- Team Section Begin -->
  <section class="instructor spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title normal-title">
            <h2>Meet Our Instructors</h2>
            <p style="color: black">
              Our Indian and western teachers are highly qualified and will be
              happy to share this<br />
              spiritual journey with you.
            </p>
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
              <h5>Emma Hale</h5>
              <span>Trainer</span>
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
              <span>Trainer</span>
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
              <span> Trainer</span>
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
              <span> Trainer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Team Section End -->

  <!-- Appoinment Section Begin -->
  <section class="appointment">
    <div class="container">
      <div class="appointment__text">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <!-- <img src="img/icon-white.png" alt="" /> -->
              <h2>Make An Appointment</h2>
            </div>
          </div>
        </div>
        <form action="#" class="appointment__form">
          <div class="row">
            <div class="col-lg-6">
              <input type="text" placeholder="Name" />
            </div>
            <div class="col-lg-6">
              <input type="text" placeholder="Email" />
            </div>
            <div class="col-lg-6">
              <input type="text" placeholder="Phone" />
            </div>
            <div class="col-lg-6">
              <select class="class-select">
                <option value="">Choose Your Class</option>
              </select>
            </div>
            <div class="col-lg-12 text-center">
              <textarea placeholder="Message"></textarea>
              <button type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- Appoinment Section End -->

  <!-- Testimonial Section Begin -->
  <section class="testimonial spad">
    <div class="container">
      <div class="testimonial__slider owl-carousel">
        <div class="testimonial__item">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
              <div class="testimonial__text">
                <p>
                  This is my second time completing a 200 hr TTC from Zogin
                  and I loved the experiences even more than the first time
                  that I had done in 2014.
                </p>
                <img src="img/testimonial/testimonial-1.png" alt="" />
                <h5>Linnie Walton <span>- Trainer</span></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
              <div class="testimonial__text">
                <p>
                  This is my second time completing a 200 hr TTC from Zogin
                  and I loved the experiences even more than the first time
                  that I had done in 2015.
                </p>
                <img src="img/testimonial/testimonial-1.png" alt="" />
                <h5>Linnie Walton <span>- Trainer</span></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
              <div class="testimonial__text">
                <p>
                  This is my second time completing a 200 hr TTC from Zogin
                  and I loved the experiences even more than the first time
                  that I had done in 2016.
                </p>
                <img src="img/testimonial/testimonial-1.png" alt="" />
                <h5>Linnie Walton <span>- Trainer</span></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
              <div class="testimonial__text">
                <p>
                  This is my second time completing a 200 hr TTC from Zogin
                  and I loved the experiences even more than the first time
                  that I had done in 2017.
                </p>
                <img src="img/testimonial/testimonial-1.png" alt="" />
                <h5>Linnie Walton <span>- Trainer</span></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Section End -->

  <!-- Footer Section Begin -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="footer__about">
            <img src="img/footer-logo.png" alt="" />
            <ul>
              <li>
                <i class="fa fa-clock-o"></i> Mon - Fri: 6:30am - 07:45pm
              </li>
              <li>
                <i class="fa fa-clock-o"></i> Sat - Sun: 8:30am - 05:45pm
              </li>
            </ul>
            <form action="#" class="subscribe-form">
              <input type="text" placeholder="Your Email" />
              <button type="submit"><i class="fa fa-send"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
          <div class="footer__widget">
            <h5>Inspiration</h5>
            <ul>
              <li><a href="#">Online Pilates</a></li>
              <li><a href="#">Yoga for Beginners</a></li>
              <li><a href="#">Online Pilates</a></li>
              <li><a href="#">Online Yoga</a></li>
              <li><a href="#">Conditioning</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="footer__widget">
            <h5>About Us</h5>
            <ul>
              <li><a href="#">Our Vision</a></li>
              <li><a href="#">Our Mission</a></li>
              <li><a href="#">Meet The Team</a></li>
              <li><a href="#">Introduce</a></li>
              <li><a href="#">Customer Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer__widget">
            <h5>Contact Us</h5>
            <ul class="footer-address">
              <li><i class="fa fa-phone"></i> (01) 436 8888</li>
              <li><i class="fa fa-envelope"></i> hello@zogin.com</li>
              <li>
                <i class="fa fa-location-arrow"></i> 828 Granville Lights
                Suite 466
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
              <p>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | This template is made with
                <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://colorlib.com" target="_blank">Colorlib</a>
              </p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="footer__copyright__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer Section End -->

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