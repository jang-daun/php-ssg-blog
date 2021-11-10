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
    <div class="main-visual__txt flex">
        <div class="main-visual__txt-title flex">
            <span>For nature For future</span>
            <span>그린피스는 더 푸르고 건강한 세상을 위해 싸움을 멈추지 않을 것입니다.</span>
        </div>
        <div class="main-visual__txt-cont flex">
            <a href="#">동참 하기</a>
        </div>
    </div>
</div>

<div id="main-content-1">
    <div class="con">
        <div class="main-content-1__campaign">
            <div class="campaign__cont flex">
                <div class="cont__2box flex">
                    <div class="campaign__title">
                        <a class="titleeng" href="#">Green Campaign</a>
                        <a class="titleko" href="#">그린피스 캠페인</a>
                        <div class="greenbar"></div>
                        <div class="content">그린피스에서 진행하는 지역 및 글로벌 캠페인에 대해 자세히 알아보세요.</div>
                    </div>
                </div>
                <div class="cont__2box flex">
                    <div class="box_4box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/campaign_ocean.jpg"
                            alt="">
                        <div class="box_4box__whiteopacity"></div>
                        <div class="box_4box__white"></div>
                        <div class="box_4box__border"></div>
                        <a class="box_4box__txt-box flex" href="#">
                            <div class="flex txt-box__title">
                                <span>해양</span>
                                <span>Oceans</span>
                            </div>
                            <div class="campaign__cont__more flex">
                                <div class="campaign__cont__more-box">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="box_4box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/campaign_health.jpg"
                            alt="">
                        <div class="box_4box__whiteopacity"></div>
                        <div class="box_4box__white"></div>
                        <div class="box_4box__border"></div>
                        <a class="box_4box__txt-box flex" href="#">
                            <div class="flex txt-box__title">
                                <span>생활</span>
                                <span>Health</span>
                            </div>
                            <div class="campaign__cont__more flex">
                                <div class="campaign__cont__more-box">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="campaign__cont flex">
                <div class="cont__2box flex">
                    <div class="box_4box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/campaign_climate.jpg"
                            alt="">
                        <div class="box_4box__whiteopacity"></div>
                        <div class="box_4box__white"></div>
                        <div class="box_4box__border"></div>
                        <a class="box_4box__txt-box flex" href="#">
                            <div class="flex txt-box__title">
                                <span>기후</span>
                                <span>Climate</span>
                            </div>
                            <div class="campaign__cont__more flex">
                                <div class="campaign__cont__more-box">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cont__2box flex">
                        <div class="box_4box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/campaign_forest.jpg"
                                alt="">
                            <div class="box_4box__whiteopacity"></div>
                            <div class="box_4box__white"></div>
                            <div class="box_4box__border"></div>
                            <a class="box_4box__txt-box flex" href="#">
                                <div class="flex txt-box__title">
                                    <span>산림</span>
                                    <span>Forest</span>
                                </div>
                                <div class="campaign__cont__more flex">
                                    <div class="campaign__cont__more-box">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cont__2box flex">
                            <div class="box_4box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/campaign_plastic.jpg"
                                    alt="">
                                <div class="box_4box__whiteopacity"></div>
                                <div class="box_4box__white"></div>
                                <div class="box_4box__border"></div>
                                <a class="box_4box__txt-box flex" href="#">
                                    <div class="flex txt-box__title">
                                        <span>플라스틱</span>
                                        <span>Plastic</span>
                                    </div>
                                    <div class="campaign__cont__more flex">
                                        <div class="campaign__cont__more-box">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="box_4box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/campaign_artic.jpg"
                                    alt="">
                                <div class="box_4box__whiteopacity"></div>
                                <div class="box_4box__white"></div>
                                <div class="box_4box__border"></div>
                                <a class="box_4box__txt-box flex" href="#">
                                    <div class="flex txt-box__title">
                                        <span>북극</span>
                                        <span>Artic</span>
                                    </div>
                                    <div class="campaign__cont__more flex">
                                        <div class="campaign__cont__more-box">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main-content-2">
    <div class="con flex">
        <div class="campaign__title">
            <a class="titleeng" href="#">Green Project</a>
            <a class="titleko" href="#">그린피스 주요 프로젝트</a>
            <div class="greenbar"></div>
            <div class="content">그린피스는 국내는 물론 전 지구적 환경 문제에 대해 명확한 목표를 가지고 프로젝트를 진행합니다.</div>
        </div>
        <div class="campaign__content">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>




<?php
require_once "foot.php";
?>