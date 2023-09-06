<style>
  .email-phone-section {
    display: flex;
    justify-content: flex-end;
    padding: 10px;
  }

  .email-phone-section a {
    margin-right: 10px;
    color: #333;
    text-decoration: none;
    display: flex;
    align-items: center;
  }

  .email-phone-section i {
    margin-right: 5px;
  }

  .email-phone-section span {
    font-size: 14px;
  }
</style>



<div class="email-phone-section">
  <!-- <a href="mailto:email@example.com">
    <i class="fas fa-envelope" style="font-size:18px;"></i>
    <span style="font-size:18px;">email@example.com</span>
  </a>  -->
  <a href="mailto:email@example.com">
    <i class="fa fa-envelope " style="font-size:18px;"></i>
    <span style="font-size:18px;">email@example.com</span>
  </a>


  <a href="tel:(518)-428-3936">
    <i class="fas fa-phone" style="font-size:18px;"></i>
    <span style="font-size:18px;">(518)-428-3936</span>
  </a>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/Logo.png" alt="Logo" style="margin-right:50px; height:120px;width:150px">

    </a>
    <style>
      @media (max-width: 767px) {
        .hide-on-mobile {
          display: none;
        }
      }
    </style>

    <div class="col-lg-4 col-md-6 col-xs-0 hide-on-mobile" style="margin-top: 0px;">
      <h4 style="transform: skewX(-20deg);">
        <strong>
          <span class="text-line" style="color: darkgreen;font-weight: bold;">MAYURA</span>
          <span class="text-line" style="color: darkgoldenrod;font-weight: bold;">SCHOOL</span>
          <span class="text-line" style="color: grey;font-weight: bold;">OF</span>
          <span class="text-line" style="color: black;font-weight: bold;">ARTS</span>
        </strong>
      </h4>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="font-size:20px;">
        <li class="nav-item" style="padding-right:15px;">
          <a class="nav-link text-center <?php echo ($page == 'index') ? 'active' : ''; ?>" style="<?php echo ($page == 'index') ? 'background-color:#fc5603;color:white;' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item" style="padding-right:15px;">
          <a class="nav-link text-center <?php echo ($page == 'about') ? 'active' : ''; ?>" style="<?php echo ($page == 'about') ? 'background-color:#fc5603;color:white' : ''; ?>" href="about.php">About</a>
        </li>
        <li class="nav-item" style="padding-right:15px;">
          <a class="nav-link text-center <?php echo ($page == 'event') ? 'active' : ''; ?>" style="<?php echo ($page == 'event') ? 'background-color:#fc5603;color:white' : ''; ?>" href="event.php">Event</a>
        </li>
        <li class="nav-item" style="padding-right:15px;">
          <a class="nav-link text-center <?php echo ($page == 'curriculum') ? 'active' : ''; ?>" style="<?php echo ($page == 'curriculum') ? 'background-color:#fc5603;color:white' : ''; ?>" href="curriculum.php">Curriculum</a>
        </li>
        <li class="nav-item" style="padding-right:15px;">
          <a class="nav-link text-center <?php echo ($page == 'gallery') ? 'active' : ''; ?>" style="<?php echo ($page == 'gallery') ? 'background-color:#fc5603;color:white' : ''; ?>" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item" style="padding-right:15px;">
          <a class="nav-link text-center <?php echo ($page == 'contact') ? 'active' : ''; ?>" style="<?php echo ($page == 'contact') ? 'background-color:#fc5603;color:white' : ''; ?>" href="contact.php">Contact</a>
        </li>

        <!--        <li class="nav-item" style="padding-right: 20px;">-->
        <!--  <a class="nav-link <?php echo ($page == 'index') ? 'active' : ''; ?> btn btn-primary btn-border btn-lg fs-5" style="<?php echo ($page == 'index') ? 'background-color:#fc5603; color: white' : ''; ?>" href="index.php#appointment">Join Now</a>-->
        <!--</li>-->
        <li class="nav-item pt-0">
          <a href="index.php#appointment" class="text-center btn  px-md-4 rounded-pill pt-2" style="height: 48px; width: 150px; font-size: 18px; display: block; margin: 0 auto; background-color : #fc5603; color:white ;font-weight :bold;">
            Join Now
          </a>
        </li>


        <!--<a class="btn   btn-primary btn-border btn-lg fs-5" href="#appointment">Book Now!</a>-->
      </ul>

    </div>
  </div>
</nav>


<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flaticon@latest/css/flaticon.css" />
 -->



<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 500) {
      $('.back-to-top').fadeIn();
      $('.back-to-top').css('display', 'flex');
    } else {
      $('.back-to-top').fadeOut();
    }
  });

  $(".back-to-top").click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
  });
</script>