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
            <div class="contents flex">
                <div class="contents__box contents__box-1">
                    <div class="box__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/1-person.svg" alt="">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/1-clock.svg" alt="">
                    </div>
                    <div class="box__bottom">
                    </div>
                    <div class="box__txt-box">
                        <a href="#">9월 운영</a>
                    </div>
                </div>
                <div class="contents__box contents__box-2">
                    <div class="box__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/2-person.svg" alt="">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/2-music.svg" alt="">
                    </div>
                    <div class="box__bottom">
                    </div>
                    <div class="box__txt-box">
                        <a href="#">공연 시간표</a>
                    </div>
                </div>
                <div class="contents__box contents__box-3">
                    <div class="box__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/3-person.svg" alt="">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/3-card.svg" alt="">
                    </div>
                    <div class="box__bottom">
                    </div>
                    <div class="box__txt-box">
                        <a href="#">요금 안내</a>
                    </div>
                </div>
            </div>
            <div class="contents contents-2 flex">
                <div class="contents__box contents__box-4">
                    <div class="box__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/4-back.svg" alt="">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/4-rabbits.svg" alt="">
                    </div>
                    <div class="box__bottom">
                    </div>
                    <div class="box__txt-box">
                        <a href="#">먹이주기 관람<br>상시 운영</a>
                    </div>
                </div>
                <div class="contents__box contents__box-5">
                    <div class="box__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/5-back.svg" alt="">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/5-bird.svg" alt="">
                    </div>
                    <div class="box__bottom">
                    </div>
                    <div class="box__txt-box">
                        <a href="#">버드랜드<br>생태 설명회</a>
                    </div>
                </div>
                <div class="contents__box contents__box-6">
                    <div class="box__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/6-line.svg" alt="">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/6-car-re.svg" alt="">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/6-parking.svg" alt="">
                    </div>
                    <div class="box__bottom">
                    </div>
                    <div class="box__txt-box">
                        <a href="#">주차시설 안내</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--오월드 랜드-->

<div id="land" class="con-min-width">
    <div class="con flex">
        <div class="title flex">
            <span>오월드만의 랜드</span>
            <span>오월드에서 다양한 즐길거리를 함께해요!</span>
        </div>
        <div class="land__contents flex">
            <div class="content__joy">
                <div class="land__img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/joyland.jpg" alt="">
                </div>
                <div class="land__txt-box flex">
                    <a href="#">조이랜드</a>
                </div>
            </div>
            <div class="content__bird">
                <div class="land__img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/birdland.jpg" alt="">
                </div>
                <div class="land__txt-box flex">
                    <a href="#">버드랜드</a>
                </div>
            </div>
            <div class="content__zoo">
                <div class="land__img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/zooland.jpg" alt="">
                </div>
                <div class="land__txt-box flex">
                    <a href="#">주랜드</a>
                </div>
            </div>
            <div class="content__flower">
                <div class="land__img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/flowerland.jpg" alt="">
                </div>
                <div class="land__txt-box flex">
                    <a href="#">플라워랜드</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--공지사항&멤버십-->

<div id="notice-membership" class="con-min-width">
    <div class="con flex">
        <div class="notice-membership__notice-box flex">
            <div class="notice-box__title flex">
                <a href="#">뉴스 & 공지사항</a>
                <a href="#">더 보기</a>
            </div>
            <div class="notice-box__contents">
                <div class="contents_txt flex">
                    <a href="#" class="date flex">
                        <span>10</span>
                        <span>2021-09</span>
                    </a>
                    <a href="#">
                        <span>대전오월드 평일 놀이시설 교체 안내</span>
                    </a>
                </div>
                <div class="contents_txt flex">
                    <a href="#" class="date flex">
                        <span>03</span>
                        <span>2021-09</span>
                    </a>
                    <a href="#">
                        <span>야간 개장 미운영 안내</span>
                    </a>
                </div>
                <div class="contents_txt flex">
                    <a href="#" class="date flex">
                        <span>26</span>
                        <span>2021-08</span>
                    </a>
                    <a href="#">
                        <span>온통대전 및 키오스크 도입에 따른 이용요금 변경</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="notice-membership__line"></div>
        <div class="notice-membership__membership-box flex">
            <div class="membership-box__title flex">
                <a href="#" class="flex">
                    <span>제휴 카드 및 멤버십</span>
                    <span>이용자 편의를 위한 제휴카드 및 멤버십 서비스</span>
                </a>
            </div>
            <div class="membership-box__contents flex">
                <div class="circle"></div>
                <a href="#"><span>내게 꼭 맞는</span><span> 할인 정보</span></a>
                <a href="#">무료 입장 후 다양한 놀이기구 및<br>사파리를 이용해보세요</a>
            </div>
            <div class="membership-box__more flex">
                <a href="#">
                    <span>자세히 보기</span>
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/oworld/img/arrow.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<?php
require_once "foot.php";
?>