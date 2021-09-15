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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
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
    <div class="top-bar con-min-width">
        <div class="con flex ">
            <div class="tob-bar__left">
                <a href="#">그림책 관련 사이트</a>
                <a href="#">후원 출판사</a>
            </div>
            <div class="tob-bar__logo">
                <a href="index.ssghtml.php">
                    <img style="width:238px;" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/logo.svg"
                        alt="로고">
                </a>
            </div>
            <div class="tob-bar__right">
                <a href="#">로그인</a>
                <a href="#">회원가입</a>
                <a href="#">산그림</a>
            </div>
        </div>
    </div>

    <!--gnb 시작-->
    <div class="gnb con-min-width flex">
        <div class="con flex">
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
    </div>