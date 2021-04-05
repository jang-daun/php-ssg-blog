<?php
$pageCode = 'about';
$pageTitle = "ABOUT";
require_once "head.php";
?>
<script src="../package/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="about.css">
<script src="about.js" defer></script>

<div class="circle"></div>


<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
          <div class="orbit">
              
          </div>
      </div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

<?php
require_once "foot.php";
?>