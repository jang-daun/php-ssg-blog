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
  </section>
  <section class="section section1 con-min-width bg-black">
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