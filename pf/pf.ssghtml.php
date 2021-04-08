<?php
$pageCode = 'portfolio';
$pageTitle = "PORTFOLIO";
require_once "head.php";
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css">

<link rel="stylesheet" href="pf.css">
<script src="pf.js" defer></script>


<div id="fullpage">
  <section class="section section1 con-min-width bg-red fp-auto-height-responsive">
    <div class="backcircle"></div>
    <div class="notitle">
      <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/no1p.svg" alt="">
    </div>
    <div class="device">
      <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/mac.png" alt="">
    </div>
    <div class="title">
      <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/APC.svg" alt="">
    </div>
    <div class="btn">
      <a href="web2/process.html" class="process">
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/process.svg" alt="">
      </a>
      <a href="web2/index.ssghtml.php" class="web-site">
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/web-site.svg" alt="">
      </a>
    </div>
  </section>
  <section class="section section1 section2 con-min-width bg-black">
    <div class="backcircle backcircle2"></div>
  </section>
  <section class="section section1 con-min-width bg-white">
    <div class="backcircle backcircle3"></div>
  </section>
  </section>
</div>



<?php
require_once "foot.php";
?>