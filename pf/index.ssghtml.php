<?php
$pageTitle = "";
require_once "head.php";
?>
<link rel="stylesheet" href="index.css">
<script src="index.js" defer></script>

<script>
       // 주소 뒤에 / 를 붙여주는 코드
       if (location.href.indexOf('index.ssghtml.php') === -1 && location.href.indexOf('index.html') === -1 &&
              location.href.substr(-1, 1) !== '/') {
              location.replace(location.href + '/');
       }
</script>


<div class="main-page">
       <div class="con flex">
              

              <div class="main-txt-box">
                     <img class="main-page__slogan1" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/main-page-slogan1.svg"
                            alt="">
                     <img class="main-page__slogan2" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/main-page-slogan5.svg"
                            alt="">
              </div>

              <div class="main-img-box">
                     <img class="main-page__moon" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/main-moon.svg"
                            alt="">
              </div>
       </div>

</div>

<?php
require_once "foot.php";
?>