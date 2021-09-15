<?php
$title = "그림책박물관";

require_once "head.php";
?>

<link rel="stylesheet" href="index.css">
<script src="index.js" defer></script>


<script>
    // 주소 뒤에 / 를 붙여주는 코드
    // 오직 index.html, index.ssghtml.php 에도 추가해주세요.
    if (location.href.indexOf('index.ssghtml.php') === -1 && location.href.indexOf('index.html') === -1 &&
        location.href.substr(-1, 1) !== '/') {
        location.replace(location.href + '/');
    }
</script>


<!--메인 비주얼 시작-->
<div class="main-1 con-min-width">
    <div class="main">
        <div class="main_visual flex">
            <div class="main_visual__main">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/main_1.jpg" alt="메인1">
                    <img class="main_txt" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/main_1_1.svg"
                        alt="메인텍스트1">
                </div>
            </div>
            <div class="main_visual__main">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/main_3.jpg" alt="메인2">
                    <img class="main_txt" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/main_2_1.svg"
                        alt="메인텍스트2">
                </div>
            </div>
            <div class="main_visual__main">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/main_2.jpg" alt="메인3">
                    <img class="main_txt" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/main_3_1.svg"
                        alt="메인텍스트3">
                </div>
            </div>
        </div>
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/menu_underline.svg" alt="" class="underline">
    </div>
</div>

<!--메인 비주얼 끝-->


<!--금주의 그림책 시작-->

<div class="week-book book-section con-min-width">
    <div class="con">
        <div class="week-book__title-btn title-btn flex">
            <div class="week-book_title title">
                <span>금주의 그림책</span>
            </div>
            <div class="week_book__btn book__btn flex">
                <div class="btn__ko">
                    <span>한국</span>
                </div>
                <div class="btn__en">
                    <span>번역</span>
                </div>
                <div class="btn__og">
                    <span>원서</span>
                </div>
            </div>
        </div>
        <div class="week-book__contents contents">
            <!-- Swiper -->
            <div class="swiper" id="ka-swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_book_1.jpg" alt="">
                        </div>
                        <div class="slide-txt-box flex">
                            <div class="slide-txt-box-title">
                                <span>다 같은 나무인 줄 알았어</span>
                                <div></div>
                            </div>
                            <div class="slide-txt-box-per">
                                <span>그림 긴선남</span>
                                <span>글 긴선남</span>
                            </div>
                            <div class="slide-txt-box-pub">
                                <span>출판사 그림책 공작소</span>
                                <span>발행일 2021-07-15</span>
                            </div>
                            <div class="slide-txt-box-first">
                                <span>우리 동네엔 나무가 참 많아.<br>처음엔 다 같은 나무인 줄 알았어. 꽃이 펴서 알았지.</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img-box bb"></div>
                        <div class="slide-txt-box bb"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img-box bb"></div>
                        <div class="slide-txt-box bb"></div>
                    </div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </div>
</div>


<!--금주의 그림책 끝-->