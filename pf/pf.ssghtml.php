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
      <a href="web2/process.html" target="_blank" class="process">
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/process.svg" alt="">
      </a>
      <a href="web2/index.ssghtml.php" target="_blank" class="web-site">
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/web-site.svg" alt="">
      </a>
    </div>
  </section>
  <section class="section section1 section2 con-min-width bg-black">
    <div class="backcircle backcircle2"></div>
    <div class="notitle">
      <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/no2p.svg" alt="">
    </div>
    <div class="device">
      <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/greenpf.png" alt="">
    </div>
    <div class="title">
      <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/grlogo.svg" style="width:80mm; margin-top:10px;" alt="">
    </div>
    <div class="btn">
      <a href="web1/process.html" target="_blank" class="process" style="border:1px solid black;">
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/problack.svg" alt="">
      </a>
      <a href="web1/index.ssghtml.php" target="_blank" class="web-site" style="border:1px solid black;">
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/webblack.svg" alt="">
      </a>
    </div>
  </section>
  <section class="section section1 con-min-width bg-white">
    <div class="backcircle backcircle3"></div>
    <div class="notitle">
      <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/ccuxui.svg" alt="">
    </div>
    <div class="device">
      <img style="width:240mm;" src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/cc.png" alt="">
    </div>
    <div class="title">
      <img style="width:25mm; margin-top:20px;" src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/ct.png" alt="">
    </div>
    <div class="btn">
      <a href="mobile1/index.html" target="_blank" class="process">
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/process.svg" alt="">
      </a>
    </div>
  </section>
</div>



<?php
require_once "foot.php";
?>