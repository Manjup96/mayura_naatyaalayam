<!DOCTYPE html>
<html lang="en">
<?php
include 'links2.php';
?>

<body>

  <?php
  $page = 'gallery';
  include 'navbar2.php';
  // include 'whatsapp.php';
  ?>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banners/Gallery.png" class="d-block w-100" alt="...">
    
    </div>
  </div>
  </div>

  <div class="gallery" style="padding-top:50px;" data-aos="zoom-in-right">
   <div class="gallery-item">
      <a href=" images/Gallery/large/large1.png " data-lightbox="gallery">
        <img src="images/Gallery/small/small1.png " alt="Image 1"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large2.png" data-lightbox="gallery">
        <img src="images/Gallery/small/small2.png" alt="Image 2"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large3.png" data-lightbox="gallery">
        <img src="images/Gallery/small/small3.png" alt="Image 3"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large4.png" data-lightbox="gallery">
        <img src="images/Gallery/small/small4.png" alt="Image 4"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large5.png" data-lightbox="gallery">
        <img src="images/Gallery/small/small5.png" alt="Image 5"></a>
    </div>

    <div class="gallery-item">
      <a href=" images/Gallery/large/large6.png " data-lightbox="gallery">
        <img src="images/Gallery/small/small6.png " alt="Image 6"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large7.jpg" data-lightbox="gallery">
        <img src="images/Gallery/small/small7.jpg" alt="Image 7"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large8.jpg" data-lightbox="gallery">
        <img src="images/Gallery/small/small8.jpg" alt="Image 8"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large9.jpg" data-lightbox="gallery">
        <img src="images/Gallery/small/small9.jpg" alt="Image 9"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large10.jpg" data-lightbox="gallery">
        <img src="images/Gallery/small/small10.jpg" alt="Image 10"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large11.jpg" data-lightbox="gallery">
        <img src="images/Gallery/small/small11.jpg" alt="Image 11"></a>
    </div>
    <div class="gallery-item">
      <a href="images/Gallery/large/large12.jpg" data-lightbox="gallery">
        <img src="images/Gallery/small/small12.jpg" alt="Image 12"></a>
    </div>

  </div>
  <!-- Footer Section Begin -->
  <?php
  include 'footer.php';
  ?>
  <!-- Footer Section End -->

  <script>
    // Initialize lightbox
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    });
  </script>



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