<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/Logo.png" alt="Logo" style="margin-right:50px; height:120px;width:150px">

    </a>
    <div class="col-lg-4 col-md-4" style="margin-top: 0px;">
                        <h4 style="transform: skewX(-20deg);">MAYURA SCHOOL OF ARTS</h4>
                    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="font-size:20px;">
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'index') ? 'active' : ''; ?>" style="<?php echo ($page == 'index') ? 'background-color:#2B2730;color:white' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>" style="<?php echo ($page == 'about') ? 'background-color:#2B2730;color:white' : ''; ?>" href="about.php">About</a>
        </li>
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'event') ? 'active' : ''; ?>" style="<?php echo ($page == 'event') ? 'background-color:#2B2730;color:white' : ''; ?>" href="event.php">Event</a>
        </li>
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'curriculum') ? 'active' : ''; ?>" style="<?php echo ($page == 'curriculum') ? 'background-color:#2B2730;color:white' : ''; ?>" href="curriculum.php">Curriculum</a>
        </li>
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'gallery') ? 'active' : ''; ?>" style="<?php echo ($page == 'gallery') ? 'background-color:#2B2730;color:white' : ''; ?>" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" style="<?php echo ($page == 'contact') ? 'background-color:#2B2730;color:white' : ''; ?>" href="contact.php">Contact</a>
        </li>
      </ul>

    </div>
  </div>
</nav>




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