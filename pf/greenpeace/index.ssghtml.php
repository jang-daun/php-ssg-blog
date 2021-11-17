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

<!--메인 비주얼-->

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

<!--캠페인-->

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

<!--프로젝트-->

<div id="main-content-2">
    <div class="con flex">
        <div class="campaign__title project__title">
            <a class="titleeng" href="#">Green Project</a>
            <a class="titleko" href="#">그린피스 주요 프로젝트</a>
            <div class="greenbar"></div>
            <div class="content">그린피스는 국내는 물론 전 지구적 환경 문제에 대해 명확한 목표를 가지고 프로젝트를 진행합니다.</div>
        </div>
        <div class="campaign__content project__content">
            <div class="swiper">
                <div class="swiper-wrapper flex">
                    <div class="swiper-slide flex">
                        <div class="project__box_cont flex">
                            <a href="#" class="project__img-box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/project__nucleus.jpg"
                                    alt="">
                            </a>
                            <div class="project__txt-box flex">
                                <a href="#">탈원전</a>
                                <a href="#">기후</a>
                                <a href="#">74개의 포스트 업데이트</a>
                            </div>
                        </div>
                        <div class="project__box_cont flex">
                            <a href="#" class="project__img-box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/project__plastic.jpg"
                                    alt="">
                            </a>
                            <div class="project__txt-box flex">
                                <a href="#">플라스틱 제로</a>
                                <a href="#" style="color:#008FE2;">해양</a>
                                <a href="#">83개의 포스트 업데이트</a>
                            </div>
                        </div>
                        <div class="project__box_cont flex">
                            <a href="#" class="project__img-box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/project__living.jpg"
                                    alt="">
                            </a>
                            <div class="project__txt-box flex">
                                <a href="#">생물의 다양성</a>
                                <a href="#">기후</a>
                                <a href="#">11개의 포스트 업데이트</a>
                            </div>
                        </div>
                        <div class="project__box_cont flex">
                            <a href="#" class="project__img-box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/project__climate.jpg"
                                    alt="">
                            </a>
                            <div class="project__txt-box flex">
                                <a href="#">기후 참정권</a>
                                <a href="#">기후</a>
                                <a href="#">54개의 포스트 업데이트</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide flex">
                        <div class="project__box_cont flex">
                            <a href="#" class="project__img-box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/project__energy.jpg"
                                    alt="">
                            </a>
                            <div class="project__txt-box flex">
                                <a href="#">내연 기관차</a>
                                <a href="#">기후</a>
                                <a href="#">35개의 포스트 업데이트</a>
                            </div>
                        </div>
                        <div class="project__box_cont flex">
                            <a href="#" class="project__img-box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/project__coal.jpg"
                                    alt="">
                            </a>
                            <div class="project__txt-box flex">
                                <a href="#">석탄투자</a>
                                <a href="#">기후</a>
                                <a href="#">74개의 포스트 업데이트</a>
                            </div>
                        </div>
                        <div class="project__box_cont flex">
                            <a href="#" class="project__img-box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/project__artic.jpg"
                                    alt="">
                            </a>
                            <div class="project__txt-box flex">
                                <a href="#">북극보호</a>
                                <a href="#" style="color:#62CBD7;">북극</a>
                                <a href="#" style="#62cbd7">21개의 포스트 업데이트</a>
                            </div>
                        </div>
                        <div class="project__box_cont flex">
                            <a href="#" class="project__img-box">
                                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/project__ocean.jpg"
                                    alt="">
                            </a>
                            <div class="project__txt-box flex">
                                <a href="#">해양보호</a>
                                <a href="#" style="color:#008FE2;">해양</a>
                                <a href="#">131개의 포스트 업데이트</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

<!--캠페인 성과-->

<div id="main-content-3">
    <div class="con flex">
        <div class="campaign__title project__title">
            <a class="titleeng" href="#">Campaign Archive</a>
            <a class="titleko" href="#">캠페인 성과</a>
            <div class="greenbar"></div>
        </div>
        <div class="campaign__content archive__content">
            <div class="swiper">
                <div class="swiper-wrapper flex">
                    <div class="swiper-slide flex">
                        <a href="#" class="archive__content__img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/archive__first.jpg"
                                alt="">
                        </a>
                        <div class="archive__content__txt-box flex">
                            <div class="archive__content__txt-box__category">
                                <span style="color:#008FE2;" class="archive__content__txt-box__category__what">
                                    해양
                                </span>
                                <span class="archive__content__txt-box__category__date">
                                    2021년 09월 23일
                                </span>
                            </div>
                            <div class="archive__content__txt-box__title">
                                <a href="#">그린피스 서울사무소 해양보호 캠페인으로 이루어 낸 ‘값진 성과 TOP3’</a>
                            </div>
                            <div class="archive__content__txt-box__cont">
                                <a href="#">
                                    그린피스의 해양캠페인은 오랜 역사를 가진 환경 캠페인 중 하나입니다. 1970년대 ‘상업적 고래잡이 반대<br>
                                    캠페인’을 시작한 이후 현재까지 전 세계 그린피스 사무소에서는 <바다보호 캠페인 - Protect the Oceans><br>을 진행하고 있으며,
                                        과도한 어업과 해저자원 개발, 해양 쓰레기 오염 등으로 위협받고 있는 전 세계 공해에<br>
                                        강력한 해양보호구역이 지정될 수 있도록 요구하고 있습니다.
                                </a>
                            </div>
                            <div class="archive__content__more-btn flex">
                                <a href="#">더보기</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide flex">
                        <a href="#" class="archive__content__img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/archive__sec.jpg"
                                alt="">
                        </a>
                        <div class="archive__content__txt-box flex">
                            <div class="archive__content__txt-box__category">
                                <span style="color:#FFBE00;" class="archive__content__txt-box__category__what">
                                    기후
                                </span>
                                <span class="archive__content__txt-box__category__date">
                                    2021년 09월 01일
                                </span>
                            </div>
                            <div class="archive__content__txt-box__title">
                                <a href="#">그린란드에서 들려온 기쁜 소식! 북극 석유 탐사 중단 발표</a>
                            </div>
                            <div class="archive__content__txt-box__cont">
                                <a href="#">
                                    세계 지도를 열었을 때, 가장 눈에 띄는 커다랗고 하얀 조각인 덴마크령 그린란드는 세계에서 가장 큰 섬으로<br>
                                    국토의 85%가 얼음으로 덮여 있습니다. 이누이트 원주민들이 아직 전통적인 삶의 방식을 지키며 자연과<br>
                                    더불어 살고 있는 이 아름다운 지역은 개발로 인한 위기에 처해 있었습니다. 하지만 지난 7월 15일,<br>
                                    그린란드 정부가 석유 및 천연 가스 탐사 허가를 중단하겠다고 발표했습니다.
                                    <br>이는 기후와 북극 생태계를 위한 중요한 결정입니다!


                                </a>
                            </div>
                            <div class="archive__content__more-btn flex">
                                <a href="#">더보기</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide flex">
                        <a href="#" class="archive__content__img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/archive__third.jpg"
                                alt="">
                        </a>
                        <div class="archive__content__txt-box flex">
                            <div class="archive__content__txt-box__category">
                                <span style="color:#FFBE00;" class="archive__content__txt-box__category__what">
                                    기후
                                </span>
                                <span class="archive__content__txt-box__category__date">
                                    2021년 07월 01일
                                </span>
                            </div>
                            <div class="archive__content__txt-box__title">
                                <a href="#">네이버의 100% 재생에너지 로드맵 발표의 의미와 과제</a>
                            </div>
                            <div class="archive__content__txt-box__cont">
                                <a href="#">
                                    녹색 검색창과 모바일 메신저로 모두에게 친숙한 기업이죠. 네이버가 2040년까지 건물에서 사용하는<br>전력 100%를 재생에너지로
                                    전환하는 로드맵을 지난 5월 28일 발표했습니다. 이에 앞서 작년 10월,<br>네이버는 ‘2040 카본 네거티브(Carbon Negative)’
                                    전략을 밝힌 바 있는데요.
                                    쉽게 말해, 배출하는<br>탄소량과 감축량을 일치(배출=감축)시킨다는 ‘탄소 중립’에서 한발 더 나아가, 감축량을 배출보다<br>더 크게 하는
                                    네거티브(-)를2040년까지 달성하겠다는 의미입니다.
                                </a>
                            </div>
                            <div class="archive__content__more-btn flex">
                                <a href="#">더보기</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide flex">
                        <a href="#" class="archive__content__img-box">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/archive__fourth.jpg"
                                alt="">
                        </a>
                        <div class="archive__content__txt-box flex">
                            <div class="archive__content__txt-box__category">
                                <span style="color:#FFBE00;" class="archive__content__txt-box__category__what">
                                    기후
                                </span>
                                <span class="archive__content__txt-box__category__date">
                                    2021년 06월 30일
                                </span>
                            </div>
                            <div class="archive__content__txt-box__title">
                                <a href="#">삼성전자, 100% 재생에너지 로드맵</a>
                            </div>
                            <div class="archive__content__txt-box__cont">
                                <a href="#">
                                    삼성전자(이하 삼성)가 추진하고 있는 재생에너지 전환 사업을 총체적으로 평가한 보고서가 나왔다.
                                    <br>2016년부터 삼성의 100% 재생에너지 사용을 촉구하는 캠페인을 펼쳐온 국제환경단체 <그린피스는><br>이라는 제목의 이 보고서에서 최근
                                        삼성이 진행해온 100% 재생에너지 전환 사업의 성과를 분석했다.
                                </a>
                            </div>
                            <div class="archive__content__more-btn flex">
                                <a href="#">더보기</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </div>
</div>

<!--그린피스 소식-->

<div id="main-content-4">
    <div class="con flex">
        <div class="campaign__title news__title flex">
            <a class="titleeng" href="#">Green News</a>
            <a class="titleko" href="#">그린피스 소식</a>
            <div class="greenbar"></div>
        </div>
        <div class="campaign__content news__content flex">
            <div class="news__cont-box flex">
                <div class="new__cont-box-bord">
                    <div class="news__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/news__first.jpg" alt="">
                    </div>
                    <div class="news__white-box flex">
                        <div class="white-box__txt flex">
                            <div class="box_txt__category flex">
                                <a href="#" style="color:#FFBE00;">기후</a>
                                <a href="#">2021년 10월 26일</a>
                            </div>
                            <div class="box_txt__title">
                                <a href="#">COP26이 뭔가요?<br>
                                    6가지 문답으로 완전정복</a>
                            </div>
                            <div class="box_txt__cont">
                                <a href="#">10월 31일, 제26차 유엔기후변화협약당사국
                                    총회(COP26)가 영국 글래스고에서 개막합니다.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new__cont-box-bord">
                    <div class="news__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/news__sec.jpg" alt="">
                    </div>
                    <div class="news__white-box flex">
                        <div class="white-box__txt flex">
                            <div class="box_txt__category flex">
                                <a href="#" style="color:#FFBE00;">기후</a>
                                <a href="#">2021년 09월 15일</a>
                            </div>
                            <div class="box_txt__title">
                                <a href="#">플라스틱 생산 확대 주도하는<br>일용 소비재 기업, 기후위기 앞당긴다</a>
                            </div>
                            <div class="box_txt__cont">
                                <a href="#">글로벌 일용소비재(FMCG) 기업들이 엑슨모빌(ExxonMobil), 쉘(Shell)과 같이 잘 알려진 석유화학 회사와 결탁해 플라스틱
                                    생산 확대를 주도하며 전 세계 기후 위기를 가속화한다는 조사 결과가 나왔다.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new__cont-box-bord">
                    <div class="news__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/news__third.jpg" alt="">
                    </div>
                    <div class="news__white-box flex">
                        <div class="white-box__txt flex">
                            <div class="box_txt__category flex">
                                <a href="#" style="color:#FFBE00;">기후</a>
                                <a href="#">2021년 09월 14일</a>
                            </div>
                            <div class="box_txt__title">
                                <a href="#">긴급! 경주 원전에서 방사성<br>
                                    물질이 누출됐습니다</a>
                            </div>
                            <div class="box_txt__cont">
                                <a href="#">경주하면 떠오르는 첨성대, 문무대왕릉. 많은 유적지가 위치한 경주에는 원자로 4기와 중저준위 방사성 폐기물 처리장도 있습니다</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="news__cont-more-btn flex">
                <span>
                    소식 더 보기
                </span>
            </a>
        </div>
    </div>
</div>

<!--행동방식-->

<div id="main-content-5">
    <div class="flex">
        <div class="cont__visual-background">
            <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior_background.jpg" alt="">
            <div class="behavior__bord flex">
                <div class="behavior__box flex">
                    <div class="behavior__box__box">
                        <a href="#">Green</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior__solution.svg"
                            alt="">
                        <a href="#">해결책 제시</a>
                        <a href="#">우리는 건강하고 평화로운 미래를 위해<br>
                            환경문제의 해결책을 찾아내고 조사해 널리 알립니다.</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior__wave.svg"
                            alt="">
                    </div>
                </div>
                <div class="behavior__box flex">
                    <div class="behavior__box__box">
                        <a href="#">Peace</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior__peace-1.svg"
                            alt="">
                        <a href="#">비폭력 직접행동</a>
                        <a href="#">그린피스는 평화로운 행동이<br>
                            세상을 바꾼다고 믿습니다.</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior__wave.svg"
                            alt="">
                    </div>
                </div>
                <div class="behavior__box flex">
                    <div class="behavior__box__box">
                        <a href="#">Core</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior__global.svg"
                            alt="">
                        <a href="#">글로벌 영향력</a>
                        <a href="#">지구촌 곳곳에서 환경을 지키기 위해<br>
                            그린피스가 가진 자원을 극대화 합니다.</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior__wave.svg"
                            alt="">
                    </div>
                </div>
                <div class="behavior__box flex">
                    <div class="behavior__box__box">
                        <a href="#">Value</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior__money.svg"
                            alt="">
                        <a href="#">재정적 독립성</a>
                        <a href="#">그린피스는 정부나 기업의<br>
                            재정 지원을 받지 않습니다.</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/behavior__wave.svg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--그린피스 참여-->
<div id="main-content-6" class="">
    <div class="con">
        <div class="campaign__title partici__title flex">
            <a class="titleeng" href="#">With GREENPEACE</a>
            <a class="titleko" href="#">그린피스와 함께 하세요</a>
            <div class="greenbar"></div>
        </div>
        <div class="campaign__content partici__content flex">
            <div class="partici__cont_box flex ">
                <div class="flex">
                    <div class="partic__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/partici__donate.jpg"
                            alt="">
                    </div>
                    <div class="partic__txt-box flex">
                        <a href="#">후원으로 변화를 만드세요</a>
                        <a href="#">여러분의 후원으로 주요<br>환경문제에맞설 수 있습니다.</a>
                        <a href="#" class="flex">
                            <span>후원 하기</span>
                        </a>
                    </div>
                </div>
                <div class="flex">
                    <div class="partic__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/partici__active.jpg"
                            alt="">
                    </div>
                    <div class="partic__txt-box flex">
                        <a href="#">자원활동가에 함께 해주세요</a>
                        <a href="#">그린피스는의 긍정적인 변화를 <br>만들어 갈 자원활동가를 모집합니다.</a>
                        <a href="#" class="flex">
                            <span>함께 하기</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="partici__cont_box flex ">
                <div class="flex">
                    <div class="partic__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/partici__sign.jpg"
                            alt="">
                    </div>
                    <div class="partic__txt-box flex">
                        <a href="#">서명으로 동참해주세요</a>
                        <a href="#">여러분의 관심이 더 나은 미래를<br>만들 수 있습니다.</a>
                        <a href="#" class="flex">
                            <span>서명 하기</span>
                        </a>
                    </div>
                </div>
                <div class="flex">
                    <div class="partic__img-box">
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/green/img/partici__event.jpg"
                            alt="">
                    </div>
                    <div class="partic__txt-box flex">
                        <a href="#">이벤트에 참여하세요</a>
                        <a href="#">영감과 아이디어를<br>함께 나눠주세요</a>
                        <a href="#" class="flex">
                            <span>참여 하기</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--뉴스레터-->
<div id="main-content-7">
    <div class="con flex">
        <div class="campaign__title letter__title flex">
            <a class="titleeng" href="#">Green letter</a>
            <a class="titleko" href="#">그린피스 뉴스레터</a>
            <div class="greenbar"></div>
            <div class="content">환경 문제의 최신 정보를 전달해드립니다.</div>
        </div>
        <div class="campaign__content letter__content flex">
            <div class="letter__subscription flex">
                <input type="text" placeholder="이름*" name="member_name">
                <input type="text" placeholder="이메일*" name="member_email">
                <div class="flex">
                    <a href="#">구독 하기</a>
                </div>
            </div>
            <div class="check flex">
                <input type="checkbox" name="my-checkbox" id="opt-in">
                <label for="opt-in">개인정보수집에 동의합니다.</label>
            </div>
        </div>
    </div>
</div>

<?php
require_once "foot.php";
?>