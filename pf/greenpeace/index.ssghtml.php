<?php
$title = "GREENPEACE";

require_once "head.php";
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="index.css">
<script src="index.js" defer></script>

<script>
    // 주소 뒤에 / 를 붙여주는 코드
    if (location.href.indexOf('index.ssghtml.php') === -1 && location.href.indexOf('index.html') === -1 &&
        location.href.substr(-1, 1) !== '/') {
        location.replace(location.href + '/');
    }
</script>

<div id="main-visual">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/main-visual__land.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/main-visual__climate.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/main-visual__artic.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="main-visual__txt">
        <div class="main-visual__txt-title">
            <span>For nature For future</span>
            <span>그린피스는 더 푸르고 건강한 세상을 위해 싸움을 멈추지 않을 것입니다.</span>
        </div>
        <div class="main-visual__txt-cont">
            <a href="#">동참 하기</a>
        </div>
    </div>
</div>




<?php
require_once "foot.php";
?>