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


    <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/scroll.svg" alt="" class="scroll">
    <span class="scroll-line"></span>


    <!--금주의 그림책 시작-->
    <div class="week flex">
        <img class="deco deco_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/deco_1.svg" alt="">
        <img class="deco deco_6" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/deco_6.svg" alt="">

        <img class="deco deco_4" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/deco_4.svg" alt="">
        <img class="deco deco_5" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/deco_5.svg" alt="">
        <img class="deco deco_2" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/deco_2.svg" alt="">
        
        <div class="week__title">
            <img class="title-deco" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/left-title.svg" alt="">
            <span>금주의 그림책</span>
            <img class="title-deco" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/right-title.svg" alt="">
        </div>
        <div class="week__main-bord con con-min-width">
            <div class="main-bord_btn flex">
                <div class="btn">
                    <img class="week_yellow" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_yellow.svg"
                        alt="">
                    <span>한국</span>
                </div>
                <div class="btn">
                    <img class="week_sky" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_sky.svg" alt="">
                    <span>번역</span>
                </div>
                <div class="btn">
                    <img class="week_green" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_green.svg"
                        alt="">
                    <span>원서</span>
                </div>
            </div>

            <!--금주의 그림책 한국-->
            <div class="main-bord_contents active flex">
                <div class="main-bord_contents__book main-bord_contents__book-1">
                    <div class="color_square"></div>
                    <div class="book_square">
                        <img class="week_ko" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_ko.jpg"
                            alt="">
                    </div>
                </div>
                <div class="main-bord_contents__contents flex">
                    <div class="contents__title flex">
                        <span>다 같은 나무인 줄 알았어</span>
                        <span class="flex">2021-07-21</span>
                    </div>
                    <div class="contents__pre">
                        <span>그림작가 김선남 / 글작가 김선남<br>
                            페이지 48 쪽<br>
                            출판사 그림책공작소<br>
                            발행일 2021-07-15</span>
                    </div>
                    <div class="contents__view">
                        <span>꽃과 잎, 향기와 그늘마저 다 다른 나무들!<br>
                            그 개성이 드러날 때 나무는 빛이 납니다. <br>
                            <br>
                            여러분은 언제 빛이 나나요?<br>
                            <br>
                            본연의 모습으로 저마다의 삶을 살아가는 나무들을 가만히 마주해 보세요! <br>
                            <br>
                            오랫동안 애정 어린 눈빛으로 나무를 지켜봐온 나무 그림책의 대명사,<br>
                            김선남 작가의 다정한 목소리와 아름다운 그림으로.</span>
                    </div>
                </div>
            </div>

            <!--금주의 그림책 번역-->
            <div class="main-bord_contents main-bord_contents-2">
                <div class="main-bord_contents__book main-bord_contents__book-1">
                    <div class="color_square"></div>
                    <div class="book_square">
                        <img class="week_tran" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_tran.jpg"
                            alt="">
                    </div>
                </div>
                <div class="main-bord_contents__contents flex">
                    <div class="contents__title flex">
                        <span>기차 타고 세계 여행</span>
                        <span class="flex">2021-08-05</span>
                    </div>
                    <div class="contents__pre">
                        <span>그림작가 라이언 존슨 / 글작가 너새니얼애덤스<br>
                            페이지 80 쪽<br>
                            출판사 북극곰<br>
                            발행일 2021-08-01</span>
                    </div>
                    <div class="contents__view">
                        <span>
                            출발합니다, 모두 타세요!<br>
                            한 권의 책으로 떠나는 아름다운 세계 기차 여행<br>
                            <br>
                            스위스의 눈 덮인 알프스산맥을 가로지르는 빙하 특급 열차,<br>
                            눈 로라를 만나는 북극권 열차,<br>
                            영국의 유명한 침대 열차와 영화 속 증기 기관차,<br>드넓은 사막을 가로지르는 나미비아의 사막 특급 열차,<br>
                            유럽과 아시아를 잇는 시베리아 횡단 열차까지!
                        </span>
                    </div>
                </div>
            </div>
            <!--금주의 그림책 원서-->
            <div class="main-bord_contents main-bord_contents-3 ">
                <div class="main-bord_contents__book main-bord_contents__book-1">
                    <div class="color_square"></div>
                    <div class="book_square">
                        <img class="week_eng" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/week_eng.jpg"
                            alt="">
                    </div>
                </div>
                <div class="main-bord_contents__contents flex">
                    <div class="contents__title flex">
                        <span>NEIGHBORS (옆집엔 누가 살까?)</span>
                        <span class="flex">2021-07-14</span>
                    </div>
                    <div class="contents__pre">
                        <span>그림작가 카샤 데니세비치 / 글작가 카샤 데니세비치<br>
                            페이지 44 쪽<br>
                            출판사 Chronicle Books<br>
                            발행일 2020-09-22</span>
                    </div>
                    <div class="contents__view">
                        <span>
                            Neighbors is a contemplative picture book about the lives of
                            <br>our neighbors —who are all around us and ever-present,
                            <br>yet somehow surprisingly elusive.<br>
                            <br>
                            They're everywhere: next door, above, and even below. <br>
                            More often than not, they are a mystery, <br>a presence suggested by low hums, footfalls,
                            or perhaps a slammed door.<br>

                        </span>
                    </div>
                </div>
            </div>
        </div>

        <img class="deco deco_3" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/deco_3.svg" alt="">
    </div>


    <!--신간 그림책 시작-->

    <div class="new flex">
        <img class="new__background" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new.svg" alt="">

        <div class="con new__title">
            <img class="title-deco" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/left-title.svg" alt="">
            <span>신간 그림책</span>
            <img class="title-deco" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/right-title.svg" alt="">
        </div>
        <div class="con new__books flex">
            <div class="new__books_ko">
                <div class="ko__books flex">
                    <div class="ko__book flex">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/ko_1.jpg" alt="">
                        <span>달밤 수영장</span>
                        <span>2021-08-30</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/ko_2.jpg" alt="">
                        <span>두근두근 24</span>
                        <span>2021-08-25</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/ko_3.jpg" alt="">
                        <span>솜사탕을 가져가고…</span>
                        <span>2021-08-20</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/ko_4.jpg" alt="">
                        <span>쉿! 비구름</span>
                        <span>2021-08-17</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/ko_5.jpg" alt="">
                        <span>나의 붉은 날개</span>
                        <span>2021-08-20</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/ko_6.jpg" alt="">
                        <span>꼬맹이를 찾아요</span>
                        <span>2021-08-17</span>
                    </div>
                </div>
                <div class="more">
                    <img class="dotted" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/dotted.svg" alt="">
                    <div class="more-ko flex">
                        <span></span>
                        <a class="more_txt flex" href="#">
                            <span>한국 신간 더 보기</span>
                            <img class="arrow" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/arrow.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="new__books_ko">
                <div class="ko__books flex">
                    <div class="ko__book flex">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/eng_1.jpg" alt="">
                        <span>하늘에 얼마나 많은 …</span>
                        <span>2021-08-20</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/eng_2.jpg" alt="">
                        <span>왜요?</span>
                        <span>2021-08-15</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/eng_3.jpg" alt="">
                        <span>커다랗고 커다란…</span>
                        <span>2021-08-12</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/eng_4.jpg" alt="">
                        <span>질투나서 속상해!</span>
                        <span>2021-08-10</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/eng_5.jpg" alt="">
                        <span>나는 (    ) 사람…</span>
                        <span>2021-08-04</span>
                    </div>
                    <div class="ko__book">
                        <img class="book_1" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/eng_6.jpg" alt="">
                        <span>페르디의 무지개</span>
                        <span>2021-08-02</span>
                    </div>
                </div>
                <div class="more">
                    <img class="dotted" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/dotted.svg" alt="">
                    <div class="more-ko flex">
                        <span class="eng_stick"></span>
                        <a class="more_txt flex" href="#">
                            <span>번역 신간 더 보기</span>
                            <img class="arrow" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/arrow.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--리뷰 시작-->

    <div class="review con">
        <div class="review__tab">
            <div class="tab__btn">
                <div class="btn_notice"></div>
                <div class="btn_promo"></div>
                <div class="btn_data"></div>
            </div>
            <div class="tab__contents">
                <div class="content_notice"></div>
                <div class="content_promo"></div>
                <div class="content_data"></div>
            </div>
        </div>
    </div>