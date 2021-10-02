<?php
$pageCode = 'O!world';
$pageTitle = " main-page";
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


<!--슬라이드 시작-->
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

<!--운영 및 정보 시작-->
<div id="manage" class="con-min-width flex">
    <div class="con flex">
        <div class="manage__date">
            <div class="date__title flex">
                <span>운영<br>시간</span>
            </div>
            <div class="date__day flex">
                <span>9.23</span>
                <span>목요일 (THU)</span>
            </div>
        </div>
        <div class="manage__time">
            <div>연중무휴 : 9:30 ~18:00</div>
            <div>※ 코로나19 확산예방을 위해 야간개장 미운영</div>
        </div>
        <div class="manage__line"></div>
        <div class="manage__info">
            <span>
                <span>
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/trafic.svg" alt="">
                </span>
                <div>교통 정보</div>
            </span>
            <span>
                <span>
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/group.svg" alt="">
                </span>
                <div>
                    단체 예약
                </div>
            </span>
        </div>
    </div>
</div>

<!--오월드 주요 행사-->
<div id="main_event" class="con-min-width">
    <div class="con flex">
        <div class="title flex">
            <span>놀라운 세상 즐거운 세계</span>
            <span>오월드에서 진행하는 행사를 확인하세요.</span>
        </div>
        <div class="event__contents flex">
            <div class="contents">
                <div class="contents__box">
                    <div class="box__top"></div>
                    <div class="box__bottom"></div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
require_once "foot.php";
?>