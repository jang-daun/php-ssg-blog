<?php
$title = "그림책박물관";

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

    </div>
</div>

<!--메인 비주얼 끝-->


<!--금주의 그림책 시작-->

<div class="week-book book-section con-min-width">
    <div class="con">
        <img class="week-deco week-deco1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week-deco1.svg" alt="">
        <img class="week-deco week-deco2" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week-deco2.svg" alt="">

        <div class="week-book__title-btn title-btn flex">
            <div class="week-book_title title">
                <span>금주의 그림책</span>
            </div>
            <div class="week_book__btn book__btn flex">
                <div class="btn__ko btn__lang week-active">
                    <span>한국</span>
                </div>
                <div class="btn__en btn__lang">
                    <span>번역</span>
                </div>
                <div class="btn__og btn__lang">
                    <span>원서</span>
                </div>
            </div>
        </div>
        <div class="week-book__contents contents">
            <!-- Swiper -->
            <nav class="button-box">
                <span class="button-next">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/arrow-left.svg" alt="">
                </span>
                <span class="button-prev">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/arrow-right.svg" alt="">
                </span>
            </nav>
            <div class="swiper" id="ka-swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_book_1.jpg" alt="">
                        </div>
                        
                        <div class="slide-page-box banner">
                            <div class="slidelist">
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-1-1.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-1-2.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-1-3.jpg"
                                        alt="">
                                </div>
                            </div>
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
                                <span>우리 동네엔 나무가 참 많아.<br>처음엔 다 같은 나무인 줄 알았어.<br>꽃이 펴서 알았지.</span>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide flex">
                        <div class="slide-img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_book_2.jpg" alt="">
                        </div>
                        <div class="slide-page-box banner2">
                            <div class="slidelist">
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-2-1.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-2-2.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-2-3.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slide-txt-box flex">
                            <div class="slide-txt-box-title">
                                <span>나는 사자</span>
                                <div></div>
                            </div>
                            <div class="slide-txt-box-per">
                                <span>그림 경혜원</span>
                                <span>글 경혜원</span>
                            </div>
                            <div class="slide-txt-box-pub">
                                <span>출판사 비룡소</span>
                                <span>발행일 2021-06-28</span>
                            </div>
                            <div class="slide-txt-box-first">
                                <span>나는 사자. 여기는 내가 사는 곳이야.<br>사자들은 무리를 지어 살아.</span>
                            </div>
                        </div>
                        
                    </div>


                    <div class="swiper-slide">
                        <div class="slide-img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_book_3.jpg" alt="">
                        </div>
                        <div class="slide-page-box banner3">
                            <div class="slidelist">
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-3-1.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-3-2.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-3-3.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slide-txt-box flex">
                            <div class="slide-txt-box-title">
                                <span>김용택 시인의 자갈길</span>
                                <div></div>
                            </div>
                            <div class="slide-txt-box-per">
                                <span>그림 주리</span>
                                <span>글 김용택</span>
                            </div>
                            <div class="slide-txt-box-pub">
                                <span>출판사 풀과바람(바우솔)</span>
                                <span>발행일 2021-07-19</span>
                            </div>
                            <div class="slide-txt-box-first">
                                <span>어머니는 시오리 신작로 자갈길을 또 걸어야 한다!</span>
                            </div>
                        </div>
                        
                    </div>


                    <div class="swiper-slide">
                        <div class="slide-img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_book_4.jpg" alt="">
                        </div>
                        <div class="slide-page-box banner4">
                            <div class="slidelist">
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-4-1.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-4-2.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-4-3.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slide-txt-box flex">
                            <div class="slide-txt-box-title">
                                <span>나비 아이</span>
                                <div></div>
                            </div>
                            <div class="slide-txt-box-per">
                                <span>그림 최은진</span>
                                <span>글 최은진</span>
                            </div>
                            <div class="slide-txt-box-pub">
                                <span>출판사 북극곰</span>
                                <span>발행일 2021-06-19</span>
                            </div>
                            <div class="slide-txt-box-first">
                                <span>노란 치마를 입은 아이가<br>노란 나비를 따라 공원에 놀러 옵니다.</span>
                            </div>
                        </div>
                        
                    </div>


                    <div class="swiper-slide">
                        <div class="slide-img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_book_5.jpg" alt="">
                        </div>
                        <div class="slide-page-box banner5">
                            <div class="slidelist">
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-5-1.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-5-2.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-5-3.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slide-txt-box flex">
                            <div class="slide-txt-box-title">
                                <span>줄을 섭니다 </span>
                                <div></div>
                            </div>
                            <div class="slide-txt-box-per">
                                <span>그림 장선환</span>
                                <span>글 장선환</span>
                            </div>
                            <div class="slide-txt-box-pub">
                                <span>출판사 마술피리</span>
                                <span>발행일 2021-06-25</span>
                            </div>
                            <div class="slide-txt-box-first">
                                <span>무슨 줄일까요?<br>걸음을 멈추고 앞을 봅니다.</span>
                            </div>
                        </div>
                        
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_book_6.jpg" alt="">
                        </div>
                        <div class="slide-page-box banner6">
                            <div class="slidelist">
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-6-1.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-6-2.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-6-3.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slide-txt-box flex">
                            <div class="slide-txt-box-title">
                                <span>나무의 시간</span>
                                <div></div>
                            </div>
                            <div class="slide-txt-box-per">
                                <span>그림 이혜란A</span>
                                <span>글 이혜란</span>
                            </div>
                            <div class="slide-txt-box-pub">
                                <span>출판사 곰곰</span>
                                <span>발행일 2021-06-10</span>
                            </div>
                            <div class="slide-txt-box-first">
                                <span>오롯이 천년의 나무가 되어 보는 시간</span>
                            </div>
                        </div>
                        
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_book_7.jpg" alt="">
                        </div>
                        <div class="slide-page-box banner7">
                            <div class="slidelist">
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-7-1.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-7-2.jpg"
                                        alt="">
                                </div>
                                <div class="slideimg">
                                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/slide-page-box-7-3.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slide-txt-box flex">
                            <div class="slide-txt-box-title">
                                <span>초록 거북</span>
                                <div></div>
                            </div>
                            <div class="slide-txt-box-per">
                                <span>그림 릴리아</span>
                                <span>글 릴리아</span>
                            </div>
                            <div class="slide-txt-box-pub">
                                <span>출판사 킨더랜드</span>
                                <span>발행일 2021-06-05</span>
                            </div>
                            <div class="slide-txt-box-first">
                                <span>바람이 지나가는 소리가 들리니?<br>하늘, 풀, 꽃, 나비…….</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->

            </div>
        </div>
    </div>
</div>
<!--금주의 그림책 끝-->



<!--신간 그림책 시작-->

<div class="new-book book-section flex con-min-width">
    <div class="con flex">
        <div class="new-book__title-btn title-btn flex">
            <div class="new-book_title title">
                <span>한국 신간 그림책</span>
            </div>
        </div>
        <div class="new-book__contents flex contents">
            <div class="new-book__ko flex">
                <div class="new-book__ko_cont1">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont1.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>달밤 수영장</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-30</div>
                </div>
                <div class="new-book__ko_cont2">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont2.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>두근두근 2424</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-25</div>
                </div>
                <div class="new-book__ko_cont3">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont3.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>솜사탕을 가져가고 싶어요</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-20</div>
                </div>
                <div class="new-book__ko_cont4">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont4.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>쉿! 비구름</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-20</div>
                </div>
                <div class="new-book__ko_cont5">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont5.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>꼬맹이를 찾아요</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-17</div>
                </div>
                <div class="new-book__ko_cont6">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont6.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>나의 붉은 날개</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-17</div>
                </div>
                <div class="new-book__ko_cont7">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont13.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>돌맹이 국</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-17</div>
                </div>
                
            </div>
            <div class="new-book__ko flex">
                <div class="new-book__ko_cont1">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont7.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>검은머리 흰머리</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-16</div>
                </div>
                <div class="new-book__ko_cont2">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont8.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>빨간 초코볼의 서울여행</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-15</div>
                </div>
                <div class="new-book__ko_cont3">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont9.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>우리 곧 사라져요</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-14</div>
                </div>
                <div class="new-book__ko_cont4">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont10.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>농부할아버지와 아기채소들</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-11</div>
                </div>
                <div class="new-book__ko_cont5">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont11.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>무척 훌륭한 도둑</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-10</div>
                </div>
                <div class="new-book__ko_cont6">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont12.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>나의 밭 이야기</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-09</div>
                </div>
                <div class="new-book__ko_cont7">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__ko_cont14.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>아이 시원해!</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-09</div>
                </div>
            </div>
        </div>
        <div class="pages-btn flex">
            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/pages-btn.svg" alt="">
        </div>
    </div>
</div>

<div class="new-book book-section new-book-trans flex con-min-width">
    <div class="con flex">
        <div class="new-book__title-btn title-btn flex">
            <div class="new-book_title title">
                <span>번역 신간 그림책</span>
            </div>
        </div>
        <div class="new-book__contents flex contents">
            <div class="new-book__ko flex">
                <div class="new-book__ko_cont1">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont1.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>하늘에는 얼마나 많은 별이 있을까요?</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-30</div>
                </div>
                <div class="new-book__ko_cont2">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont2.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>왜요?</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-25</div>
                </div>
                <div class="new-book__ko_cont3">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont3.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>커다랗고 커다란 물고기</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-20</div>
                </div>
                <div class="new-book__ko_cont4">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont4.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>질투나서 속상해!</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-20</div>
                </div>
                <div class="new-book__ko_cont5">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont5.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>나는 토끼 폼폼</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-17</div>
                </div>
                <div class="new-book__ko_cont6">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont6.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>페르디의 무지개</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-17</div>
                </div>
                <div class="new-book__ko_cont7">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont7.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>물난리</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-17</div>
                </div>
                
            </div>
            <div class="new-book__ko flex">
                <div class="new-book__ko_cont1">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont8.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>방귀 뀌어도 돼?</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-16</div>
                </div>
                <div class="new-book__ko_cont2">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont9.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>까망이와 하양이</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-15</div>
                </div>
                <div class="new-book__ko_cont3">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new-book__tr_cont10.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>행복한 숲속의 아기 동물들</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-14</div>
                </div>
                <div class="new-book__ko_cont4">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book__tr_cont11.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>그날 밤 무슨일이…</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-11</div>
                </div>
                <div class="new-book__ko_cont5">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book__tr_cont12.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>여름잠을 잘 거예요</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-10</div>
                </div>
                <div class="new-book__ko_cont6">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book__tr_cont13.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>레아의 여행</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-09</div>
                </div>
                <div class="new-book__ko_cont7">
                    <div class="ko_cont__img">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book__tr_cont14.jpg" alt="">
                    </div>
                    <div class="ko_cont__title">
                        <span>딸기와 팡이</span>
                    </div>
                    <div class="ko_cont__pub">2021-08-09</div>
                </div>
            </div>
        </div>
        <div class="pages-btn flex">
            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/pages-btn.svg" alt="">
        </div>
    </div>
</div>

<!--신간 그림책 끝-->



<!--소식 시작-->

<div class="notice-book flex con-min-width book-section con-min-width">
    <div class="con">
        <div class="notice-book__title-btn title-btn flex">
            <div class="notice-book_title title">
                <span>박물관 소식</span>
            </div>
        </div>
        <div class="notice-book__contents flex contents">
            <div class="notice-book__cont1 flex">
                <div class="notice-book__cont1__1 flex">
                    <div class="notice-book__cont1__1-1">
                        <div class="notice-book-title">
                            <a href="#" class="title-box">공지사항</a>
                            <a href="#" class="more-box">더 보기</a>
                        </div>
                        <div class="notice-book-contents">
                            <div class="notice-book-content flex">
                                <a href="#" class="notice-book-content-title">2021년 블로냐 아동도서전</a>
                                <a href="#" class="notice-book-content-date">2021-06-14</a>
                            </div>
                            <div class="notice-book-content flex">
                                <a href="#" class="notice-book-content-title">제 29회 눈높이 아동문학대전</a>
                                <a href="#" class="notice-book-content-date">2021-06-12</a>
                            </div>
                            <div class="notice-book-content flex">
                                <a href="#" class="notice-book-content-title">2021 IBBY Slient Book 한국 출품작</a>
                                <a href="#" class="notice-book-content-date">2020-10-21</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notice-book__cont1__1 notice-book__cont1__2 flex">
                    <div class="notice-book__cont1__1-1">
                        <div class="notice-book-title">
                            <a href="#" class="title-box">홍보 게시판</a>
                            <a href="#" class="more-box">더 보기</a>
                        </div>
                        <div class="notice-book-contents">
                            <div class="notice-book-content flex">
                                <a href="#" class="notice-book-content-title">초대! 『물음을 위한 물음』 출간 기념</a>
                                <a href="#" class="notice-book-content-date">2021-08-12</a>
                            </div>
                            <div class="notice-book-content flex">
                                <a href="#" class="notice-book-content-title">초대! 『디지털 포스트휴먼의 조건』</a>
                                <a href="#" class="notice-book-content-date">2021-08-01</a>
                            </div>
                            <div class="notice-book-content flex">
                                <a href="#" class="notice-book-content-title">[현대어린이책미술관] 얼굴 Face 展</a>
                                <a href="#" class="notice-book-content-date">2021-08-01</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notice-book__cont2 flex">
                <div class="notice-book__cont2_box">
                    <div class="notice-cont2_box">
                        <div class="notice-book__cont2_box_title">
                            <a href="#">자료실</a>
                            <a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/notice-arrow.svg"
                                    alt=""></a>
                        </div>
                        <div class="notice-book__cont2_box_cont">
                            <a href="#">
                                [칼럼] 그림책은 어린이 편인가? 그림책 텍스트<br>
                                안에 숨겨진 네번째 어른 - [현은자 글]
                            </a>
                        </div>
                        <div class="notice-book__cont2_box_date">
                            <a href="#">2021-08-21</a>
                        </div>
                    </div>
                </div>
                <div class="notice-book__cont2_box">
                    <div class="notice-cont2_box">
                        <div class="notice-book__cont2_box_title">
                            <a href="#">미디어 리뷰/독자 리뷰</a>
                            <a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/notice-arrow.svg"
                                    alt=""></a>
                        </div>
                        <div class="notice-book__cont2_box_cont">
                            <a href="#">
                                [독자 리뷰] <막두> 갈매기 떼야 날아오르라~!
                            </a>
                        </div>
                        <div class="notice-book__cont2_box_date">
                            <a href="#">2021-08-01</a>
                        </div>
                    </div>
                </div>
                <div class="notice-book__cont2_box">
                    <div class="notice-cont2_box">
                        <div class="notice-book__cont2_box_title">
                            <a href="#">그림책 한 줄 댓글</a>
                            <a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/notice-arrow.svg"
                                    alt=""></a>
                        </div>
                        <div class="notice-book__cont2_box_cont">
                            <a href="#">
                                [댓글] 아니의 호수(Annie du lac) 삶에 지친<br>마음에 노크를 해주는 책이다.
                            </a>
                        </div>
                        <div class="notice-book__cont2_box_date">
                            <a href="#">2021-08-01</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--소식 끝-->


<?php
require_once "foot.php";
?>