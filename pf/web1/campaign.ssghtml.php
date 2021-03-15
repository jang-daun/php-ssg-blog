<?php
$title = "캠페인";

require_once "head.php";
?>

<link rel="stylesheet" href="campaign.css">
<script src="campaign.js" defer></script>
<script>
  // 주소 뒤에 / 를 붙여주는 코드
  // 오직 index.html, index.ssghtml.php 에도 추가해주세요.
  if (location.pathname.indexOf('index.ssghtml.php') !== -1 && location.pathname.indexOf('index.html') !== -1 &&
    location.pathname.substr(-1, 1) != '/') {
    location.replace(location.href + '/');
  }
</script>
<!--메인 배너 시작-->
<div class="section-2 con-min-width width-100p">
    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/mianbanner.jpg" alt="">
    <span class="black-bar"></span>
    <div class="con">
        <div class="title">
            해양
        </div>
        <div class="mini-title">
            oceans
        </div>
        <div class="content">
            그린피스는 지역 및 전지구적인 환경 캠페인을 수행함으로써<br>현실 세계의 진정한 변화를 추구하고 있습니다.
        </div>
    </div>
</div>
<!--메인 배너 끝-->


<!--들어가는 말 시작-->
<div class="section-3 con-min-width width-100p">
    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/earth.png" alt="">
    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/world.png" alt="">
    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/line2.svg" alt="">
    <div class="con">
        <div class="intro">
            <span style="color:#008FE2; font-size: 24px;">건강한 바다는</span> 70만 종 이상 생명체가 살아가는 삶의 터전일 뿐 아니라, <span>지구
                전체의 생존을 위해 필수적</span>입니다.<br>
            수십억 명의 사람들에게 일자리와 식량을 제공하는 바다는 인류의 건강과 안녕을 위해 매우 중요합니다.<br>
            <span>그러나 지금 바다는 그 어느 때보다 큰 위험에 처해 있습니다.</span><br>
            플라스틱 등 각종 독성 물질로 인한 오염, 파괴적인 어업은 물론 기후변화까지 심화되며 해양 생태계는 심각한 위협에 내몰리고 있습니다.<br>
            하지만 우리가 함께 노력한다면, 바다를 살리고 바다를 터전으로 살아가는 수많은 해양생물과 사람들을 지켜낼 수 있을 것입니다.<br>
        </div>
        <div class="liner"></div>
    </div>
</div>
<!--들어가는 말 끝-->

<!--그린피스 프로젝트 시작-->
<div class="section-4 con-min-width width-100p">
    <div class="con">
        <div class="top flex">
            <div class="flex title">
                <img class="" src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/greenicon.svg" alt="">
                <span class="">그린피스 프로젝트</span>
            </div>
        </div>
        <span>그린피스는 안전하고 건강한 바다를 위해 해양보호구역 지정을 요구합니다. <br>파괴적인 어업에 대항하고, 플라스틱 오염과 기후변화를 막기 위한 캠페인을 펼치며 바다를 보호하기 위해
            활동하고 있습니다.
        </span>
        <div class="content">
            <div class="box-1">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/whalepro.png" alt="">
                </div>
                <div class="txt-box">
                    <div>해양보호</div>
                    <div style="color:#008FE2;">해양</div>
                    <div>106 개 포스트 업데이트</div>
                </div>
            </div>
            <div class="box-1">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/pro2.png" alt="">
                </div>
                <div class="txt-box">
                    <div>플라스틱 제로</div>
                    <div style="color:#008FE2;">해양</div>
                    <div>78 개 포스트 업데이트</div>
                </div>
            </div>
            <div class="box-1">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/regal.png" alt="">
                </div>
                <div class="txt-box">
                    <div>불법어업 근절</div>
                    <div style="color:#008FE2;">해양</div>
                    <div>6 개 포스트 업데이트</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--그린피스 프로젝트 끝-->

<!--성과 시작-->
<div class="section-5 con-min-width width-100p">

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/suc1.svg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/suc3.svg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/suc2.svg" alt="">
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


</div>
<!--성과 끝-->

<!--챌린지 시작-->
<div class="section-6 con-min-width width-100p">
    <div class="con">
        <div class="top flex">
            <div class="flex title">
                <img class="" src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/greenicon.svg" alt="">
                <span class="">해양을 위한 매일 챌린지</span>
            </div>
        </div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="icon-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/animal.png" alt="">
                </div>
                <div class="title-box">
                    멸종위기 해산물 먹지 않기
                </div>
                <div class="prin">
                    <span>578명 참여중</span>
                    <span>동참하기</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/animal.png" alt="">
                </div>
                <div class="title-box">
                    치어(어린생선)나 생선 알은 먹지 않기
                </div>
                <div class="prin">
                    <span>355명 참여중</span>
                    <span>동참하기</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/cah3.png" alt="">
                </div>
                <div class="title-box">
                    해변, 모래사장의 쓰레기 치우기
                </div>
                <div class="prin">
                    <span>363명 참여중</span>
                    <span>동참하기</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/cha1.png" alt="">
                </div>
                <div class="title-box">
                    산호초를 죽이는 옥시벤존,<br>
                    옥티녹세이트 등이 함유되지 않은<br>
                    무기자외선차단제 쓰기
                </div>
                <div class="prin">
                    <span>578명 참여중</span>
                    <span>동참하기</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/cha1.png" alt="">
                </div>
                <div class="title-box">
                    미세 플라스틱이 들어 있는 세안제나<br>
                    생활용품 사용하지 않기
                </div>
                <div class="prin">
                    <span>624명 참여중</span>
                    <span>동참하기</span>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<!--챌린지 끝-->

<!--후원 및 프로모 시작-->

<div class="section-7 con-min-width width-100p">
    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/whale.jpg" alt="">
    <div class="con">
        <div class="box-1">
            <span>
                후원으로 변화를 만드세요!
            </span>
            <span></span>
            <span>여러분의 후원이 있기에 그린피스는<br>긴급한 환경문제에 맞설 수 있습니다.</span>

            <span>후원하기</span>
        </div>

        <div class="box-1">
            <span>
                지금 함께 바다를 구해주세요!
            </span>
            <span></span>
            <span>바다를 지키기 위해 지금보다 중요한 시기는 없습니다.<br>바로 지금 행동해야 합니다.</span>

            <span>서명하기</span>
        </div>
    </div>
</div>
<!--후원 및 프로모 끝-->

<!--관련 소식 시작-->
<div class="section-8 con-min-width width-100p">
    <div class="con">
        <div class="top flex">
            <div class="flex title">
                <img class="" src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/greenicon.svg" alt="">
                <span class="">관련 소식</span>
            </div>
        </div>

        <div class="content-box">
            <div class="box-1">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/n1.jpg" alt="">
                </div>
                <div class="txt-box">
                    <span class="txt-1">
                        <span style="color:#008FE2;">해양</span>
                        <span style="color:#505050;">최신 소식</span>
                    </span>
                    <span>바다를 지키는 여성들</span>
                    <span>2021년 3월 3일</span>
                </div>
            </div>
            <div class="box-1">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/n2.jpg" alt="">
                </div>
                <div class="txt-box">
                    <span class="txt-1">
                        <span style="color:#008FE2;">해양</span>
                        <span style="color:#505050;">최신 소식</span>
                    </span>
                    <span>이스라엘 해안을<br>뒤덮은 검은 기름띠</span>
                    <span>2021년 2월 24일</span>
                </div>
            </div>
            <div class="box-1">
                <div class="img-box">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/n3.jpg" alt="">
                </div>
                <div class="txt-box">
                    <span class="txt-1">
                        <span style="color:#008FE2;">해양</span>
                        <span style="color:#505050;">최신 소식</span>
                    </span>
                    <span>크지만 '작은' <br>고래를 아시나요?</span>
                    <span>2021년 2월 19일</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--관련 소식 끝-->

<?php
require_once "foot.php";
?>