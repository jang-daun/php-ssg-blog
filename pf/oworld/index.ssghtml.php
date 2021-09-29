<?php
$pageCode = 'O!world';
$pageTitle = "O!world";
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



<div class="con-min-width" id="swiper-container">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide flex">
                <div class="slide_txt-box flex">
                    <span>도심 속 자연이 살아있는<br><b>또 하나의 세상</b></span>
                    <span>오!월드에서 놀라운 세상! 즐거운 세계를 경험하세요.</span>
                    <a class="" href="#">
                        <span href="#">자세히 보기</span>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/arrow.svg" alt="">
                    </a>
                </div>
                <div class="slide_img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/slide.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
            </div>
            <div class="swiper-slide">
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <div class="con">
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

</div>






<?php
require_once "foot.php";
?>