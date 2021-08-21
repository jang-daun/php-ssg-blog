<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그림책 박물관</title>

    <!--폰트 시작-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <!--폰트 끝-->

    <!--폰트어썸 시작-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--폰트어썸 끝-->

    <!--제이쿼리 시작-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--제이쿼리 끝-->

    <!--스와이퍼 시작-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--스와이퍼 끝-->

    <!--gsap 시작-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="common.css">
    <script src="common.js" defer></script>
    <!--gsap 끝-->
</head>

<body>
    <!--탑 바 시작-->
    <div class="top-bar flex con con-min-width">
        <div class="tob-bar__left">
            <a href="#">그림책 관련 사이트</a>
            <a href="#">후원 출판사</a>
        </div>
        <div class="tob-bar__logo">
            <a href="index.ssghtml.php">
                <img style="width:238px;" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/logo.svg" alt="로고">
            </a>
        </div>
        <div class="tob-bar__right">
            <a href="#">로그인</a>
            <a href="#">회원가입</a>
            <a href="#">산그림</a>
        </div>
    </div>

    <!--gnb 시작-->
    <div class="gnb con con-min-width flex">
        <!--메뉴바-->
        <div data-sel-index="0" class="flex gnb__menu">
            <div class="mouse"></div>
            <nav class="flex gnb__menu-bar_nav">
                <ul class="gnb__menu-bar flex">
                    <li>
                        <a href="#">그림책</a>
                        <ul>
                            <li><a href="#">전체 그림책</a></li>
                            <li><a href="#">한국 그림책</a></li>
                            <li><a href="#">번역 그림책</a></li>
                            <li><a href="#">원서 그림책</a></li>
                            <li><a href="#">해외출간 그림책</a></li>
                            <li><a href="#">전집 그림책</a></li>
                            <li><a href="#">소장 그림책</a></li>
                            <li><a href="#">그림책 관련 서적</a></li>
                            <li><a href="#">작가별 그림책 보기</a></li>
                            <li><a href="#">출판사별 그림책 보기</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">수상작 모음</a>
                        <ul>
                            <li><a href="#">아스트리드 린드그렌상</a></li>
                            <li><a href="#">BIBI상</a></li>
                            <li><a href="#">안데르센상</a></li>
                            <li><a href="#">칼테콧상</a></li>
                            <li><a href="#">블로냐라가찌상</a></li>
                            <li><a href="#">케이트그린어웨이상</a></li>
                            <li><a href="#">뉴욕타임즈우수그림책상</a></li>
                            <li><a href="#">화이트 레이번즈</a></li>
                            <li><a href="#">나미콩쿠르</a></li>
                            <li><a href="#">보람창작스튜디오</a></li>
                            <li><a href="#">비룡소황금도깨비상</a></li>
                            <li><a href="#">에스파스앙팡상</a></li>
                            <li><a href="#">현북스그림책공모전</a></li>
                            <li><a href="#">보람창작그림책공모전</a></li>
                            <li><a href="#">CJ 그림책상</a></li>
                            <li><a href="#">CJ 측별전초청그림책</a></li>
                            <li><a href="#">서울동화일러스트레이션상</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">박물관 추천</a>
                        <ul>
                            <li><a href="#">그림책 박물관 추천 100권</a></li>
                            <li><a href="#">그림책 박물관 추천 1000권</a></li>
                            <li><a href="#">어린이 교육 전문가의 100권</a></li>
                            <li><a href="#">마틴 솔즈베리의 100권</a></li>
                            <li><a href="#">바른가치 그림책</a></li>
                            <li><a href="#">이토록 어여쁜 그림책</a></li>
                            <li><a href="#">그림책 상상 그림책 여행</a></li>
                            <li><a href="#">어른의 그림책</a></li>
                            <li><a href="#">어른을 위한 그림책 테라피</a></li>
                            <li><a href="#">포근하게 그림책처럼</a></li>
                            <li><a href="#">아빠와 함게 그림책 여행</a></li>
                            <li><a href="#">내게 행복을 주는 그림책</a></li>
                            <li><a href="#">크리스찬을 위한 그림책</a></li>
                            <li><a href="#">기독교 그림책</a></li>
                            <li><a href="#">유튜브 <현아티비></a></li>
                            <li><a href="#">매체 <가온빛 그림책></a></li>
                            <li><a href="#">기관 <열린 어린이></a></li>
                            <li><a href="#">기관 <한국 그림책 연감></a></li>
                            <li><a href="#">기관 <어린이 도서 연구회></a></li>
                            <li><a href="#">기관 <KBBY></a></li>
                            <li><a href="#">기관 <나다움 어린이책></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="margin-left_40" href="#">커뮤니티</a>
                        <ul>
                            <li><a href="#">공지사항</a></li>
                            <li><a href="#">신간 그림책 소개</a></li>
                            <li><a href="#">홍보 게시판</a></li>
                            <li><a href="#">자유 게시판</a></li>
                            <li><a href="#">북트레일러</a></li>
                            <li><a href="#">자료실</a></li>
                            <li><a href="#">읽어주는 그림책</a></li>
                            <li><a href="#">영어 그림책 읽기</a></li>
                            <li><a href="#">작가와의 만남</a></li>
                            <li><a href="#">책방탐방</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="font-size_16" href="#">작가별</a>

                    </li>
                    <li>
                        <a class="font-size_16" href="#">출판사별</a>

                    </li>
                    <li>
                        <a class="font-size_16" href="#">나라별</a>

                    </li>
                    <li>
                        <a class="font-size_16" href="#">주제별</a>

                    </li>
                    <li>
                        <a class="font-size_16" href="#">연령별</a>

                    </li>
                    <li>
                        <a class="font-size_16" href="#">시리즈별</a>

                    </li>
                </ul>
            </nav>
        </div>

        <!--검색-->
        <form name="topsearchfrm" method="post" action="search.asp">
            <ul class="m_search_menu">
                <select class="top_search_m" name="searchkeyword">
                    <option value="title">제목</option>
                    <option value="content">책내용</option>
                    <option value="usetag">주제어</option>
                    <option value="illustor">그림작가</option>
                    <option value="writer">글작가</option>
                    <option value="translator">번역가</option>
                    <option value="publisher">출판사</option>
                </select>
            </ul>
            <div id="m_h_search_02">
                <input type="text" name="searchvalue" id="header-search_02" onfocus="this.value=''">
                <a href="javascript:;" onclick="javascript:topsearchchk();"><i class="fas fa-search"></i></a>
            </div>
        </form>
    </div>

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
            금주의 그림책
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

    <div class="new flex bb">
        <img class="new__background" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/new.svg" alt="">

        <div class="con new__title">
            <img class="title-deco" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/left-title.svg" alt="">
            <span>신간 그림책</span>
            <img class="title-deco" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/left-title.svg" alt="">
        </div>
        <div class="con new__books flex bb">
            <div class="new__books_ko bb ">
                <div class="ko__book"></div>
                <a href="#" class="more"></a>
            </div>
            <div class="new__books_eng bb">
                <div class="eng__book"></div>
                <a href="#" class="more"></a>
            </div>
        </div>
    </div>