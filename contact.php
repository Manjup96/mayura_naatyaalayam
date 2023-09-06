<!DOCTYPE html>
<html lang="en">
<?php
include 'links2.php';
?>

<body>
  <?php
  $page = 'contact';
  include 'navbar2.php';
  ?>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/contact/contact.png" class="d-block w-100" alt="...">
      
    </div>
  </div>
 


  <!-- contact form starts -->

  <section id="contact" class="contact pb-5" data-aos="flip-down">

    <div class="container mt-5">

      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row" style="font-family:Open Sans, sans-serif;">
          <h2 class="text-center fs-2 pb-4">Contact us form</h2>
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control border border-dark" id="name" placeholder="Your Name" style="font-size: 18px;" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control border border-dark" name="email" id="email" placeholder="Your Email" style="font-size: 18px;" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="number" class="form-control border border-dark" name="mobile" id="mobile" placeholder="Mobile Number " style="font-size: 18px;" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control border border-dark" name="message" rows="5" placeholder="Message" style="font-size: 18px;" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center fs-5"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section>
  <!-- contact form ends here -->





  <div class="d-flex flex-row justify-content-space-between">
    <div class="container">
      <div class="row border border-dark"" >                      
      <div class=" col-md-8 ">                 
  <div class=" panel panel-default ">
  <div class=" panel-heading bg-secondary text-white">
        <!-- <h3 class="panel-title"> MAYURA SCHOOL OF ARTS</h3> -->
      </div>
   <div class="panel-body fs-4" style=" font-family:Open Sans, sans-serif;">
        MAYURA SCHOOL OF ARTS
      </div>
      <div class="panel-footer border-top-0 fs-6">
        <address>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="footer__widget">

              <ul class="footer-address" style="color: black;">
                <li class="text-dark"><i class="fa fa-phone"></i> (518)-428-3936</li>
                <li class="text-dark"><i class="fa fa-phone"></i>(201)-560-8745</li>
                <li class="text-dark"><i class="fa fa-envelope"></i> hello@zogin.com</li>
                <li class="text-dark"><i class="fa fa-location-arrow"></i> 93F South Railroad Ave,
                  <span style="display: inline-block; margin-left: 24px;">Bergenfield, NJ</span>
                </li>

              </ul>
            </div>
          </div>
        </address>
      </div>
    </div>

  </div>
  <div class="col-md-4 ">
    <p style="padding-left:10px;" class="fs-4">Scan for location</p>
    <img src="images/contact/QR_Map.png" alt="QR Code" style="width:200px;height:200px;display:block;">

  </div>


  </div>
  </div>
  </div>

  <!-- Footer Section Begin -->
  <?php
        include 'footer.php';
        ?>
        <!-- Footer Section End -->

  <!-- Animation links -->
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



</body>

</html>