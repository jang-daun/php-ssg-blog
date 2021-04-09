<?php
$pageCode = 'experience';
$pageTitle = "EXPERIENCE";
require_once "head.php";
?>
<link rel="stylesheet" href="ex.css">
<script src="ex.js" defer></script>


<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="img-box">
            <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/claen.jpg" alt="">
        </div>
        <div class="content">
            <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/2021.svg" alt="">
            <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/extitle1.svg" alt="">
        </div>
      </div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
    </div>
       <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

<?php
require_once "foot.php";
?>