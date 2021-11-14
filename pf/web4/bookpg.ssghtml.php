<?php
$title = "그림책박물관 - 그림책";

require_once "head.php";
?>

<link rel="stylesheet" href="bookpg.css">
<script src="bookpg.js" defer></script>


<div class="con-min-width bookpg-main">
    <div class="con">
        <div class="book-top-search flex">
            <div class="book-top_left flex">
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
                <span>총 24,339 권</span>
            </div>

            <a class="download" href="#">그림자 목록 다운로드 ↓</a>

            <div class="book-top_right flex">
                <img class="book-pg-view" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-pg-view.svg"
                    alt="">
                <select name="year">
                    <option value="발행년도">발행년도</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                </select>
                <select name="month">
                    <option value="발행월">발행월</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="4">5</option>
                    <option value="4">6</option>
                    <option value="4">7</option>
                    <option value="4">8</option>
                    <option value="4">9</option>
                    <option value="4">10</option>
                    <option value="4">11</option>
                    <option value="4">12</option>
                </select>
                <select name="order">
                    <option value="update">업데이트순</option>
                    <option value="public">발행일순</option>
                </select>
                <select name="view">
                    <option value="2">2</option>
                    <option value="5" selected="selected">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                </select>
            </div>
            <img class="book-pg-dotted" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/dotted2.svg" alt="">
        </div>
        <div class="book-list">
            <!--1줄-->
            <div class="book-list__box flex">
                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img1.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">숨을 쉬어 보아요!</a>
                                <a href="#"><b>그림작가</b> 이네스 카스텔 브랑코</a>
                                <a href="#"><b>글작가</b> 이네스 카스텔 브랑코</a>
                                <a href="#"><b>번역</b> 유 아가다</a>
                                <a href="#"><b>페이지</b> 42쪽</a>
                                <a href="#"><b>출판사</b> 고래이야기</a>
                                <a href="#"><b>발행일</b> 2021-08-20</a>
                                <a href="#"><b>주제어</b> 요가, 호흡, 상상놀이</a>
                                <a href="#"><b>연령별</b> 9~10세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 231</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img2.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">물난리</a>
                                <a href="#"><b>그림작가</b> 까미유 주르디</a>
                                <a href="#"><b>글작가</b> 플린들라브루와-알라르</a>
                                <a href="#"><b>번역</b> 윤민정</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 바둑이하우스</a>
                                <a href="#"><b>발행일</b> 2021-08-20</a>
                                <a href="#"><b>주제어</b> 생명탄생, 동생, 물</a>
                                <a href="#"><b>연령별</b> 9~10세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 310</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img3.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">나는 약속을 지켜요</a>
                                <a href="#"><b>그림작가</b> 히야시 유미</a>
                                <a href="#"><b>글작가</b> 다카하마마사노부</a>
                                <a href="#"><b>번역</b> 김보혜</a>
                                <a href="#"><b>페이지</b> 64쪽</a>
                                <a href="#"><b>출판사</b> 피카주니어</a>
                                <a href="#"><b>발행일</b> 2021-08-18</a>
                                <a href="#"><b>주제어</b> 약속, 습관</a>
                                <a href="#"><b>연령별</b> 5~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 324</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img4.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">니나의 반지</a>
                                <a href="#"><b>그림작가</b> 유기훈</a>
                                <a href="#"><b>글작가</b> 유기훈</a>
                                <a href="#"><b>페이지</b> 50</a>
                                <a href="#"><b>출판사</b> 넥서스 주니어</a>
                                <a href="#"><b>발행일</b> 2021-08-16</a>
                                <a href="#"><b>주제어</b> 여름, 여행, 바다, 물고기</a>
                                <a href="#"><b>연령별</b> 3~6세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 52</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img5.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">차의 나라 여왕님</a>
                                <a href="#"><b>그림작가</b> 연두콩</a>
                                <a href="#"><b>글작가</b> 연두콩</a>
                                <a href="#"><b>페이지</b> 48쪽</a>
                                <a href="#"><b>출판사</b> 아스터로이드북</a>
                                <a href="#"><b>발행일</b> 2021-08-17</a>
                                <a href="#"><b>주제어</b> 차, 공주, 여왕, 상상놀이</a>
                                <a href="#"><b>연령별</b> 5~6세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 52</span>
                    </div>
                </div>
            </div>

            <!--2줄-->
            <div class="book-list__box flex">
                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img6.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">유튜버가 된 햄스터 얌마</a>
                                <a href="#"><b>그림작가</b> 이재호</a>
                                <a href="#"><b>글작가</b> 신전향</a>
                                <a href="#"><b>페이지</b> 48쪽</a>
                                <a href="#"><b>출판사</b> 머스트비</a>
                                <a href="#"><b>발행일</b> 2021-08-05</a>
                                <a href="#"><b>주제어</b> 햄스터, 스타, 인기</a>
                                <a href="#"><b>연령별</b> 9~10세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 218</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img7.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">봄 햇살 목욕탕</a>
                                <a href="#"><b>그림작가</b> 최유정</a>
                                <a href="#"><b>글작가</b> 권영희</a>
                                <a href="#"><b>페이지</b> 48쪽</a>
                                <a href="#"><b>출판사</b> 빨강머리앤</a>
                                <a href="#"><b>발행일</b> 2021-08-15</a>
                                <a href="#"><b>주제어</b> 할머니, 목욕탕, 일상</a>
                                <a href="#"><b>연령별</b> 9~10세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 268</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img8.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">레아의 여행</a>
                                <a href="#"><b>그림작가</b> 나타샤 로젠베르크</a>
                                <a href="#"><b>글작가</b> 나타샤 로젠베르크</a>
                                <a href="#"><b>번역</b> 성초림</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 국민서관</a>
                                <a href="#"><b>발행일</b> 2021-08-11</a>
                                <a href="#"><b>주제어</b> 여행, 바다, 도전, 성장</a>
                                <a href="#"><b>연령별</b> 5~6세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 294</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img9.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">게르니카, 반전을 외치다</a>
                                <a href="#"><b>그림작가</b> 소피 닥스엘레</a>
                                <a href="#"><b>글작가</b> 안느 르와에</a>
                                <a href="#"><b>페이지</b> 56쪽</a>
                                <a href="#"><b>출판사</b> 한울림어린이</a>
                                <a href="#"><b>발행일</b> 2021-08-02</a>
                                <a href="#"><b>시리즈</b> 한울림 지구별 그림책</a>
                                <a href="#"><b>주제어</b> 전쟁, 평화, 시민</a>
                                <a href="#"><b>연령별</b> 11~13세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-12</span>
                        <span>조회수 240</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img10.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">여름잠을 잘 거예요</a>
                                <a href="#"><b>그림작가</b> 세라 브래넌</a>
                                <a href="#"><b>글작가</b> 멀리사 스튜어트</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 다섯수레</a>
                                <a href="#"><b>발행일</b> 2021-07-31</a>
                                <a href="#"><b>주제어</b> 여름잠, 동물</a>
                                <a href="#"><b>연령별</b> 9~13세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-12</span>
                        <span>조회수 152</span>
                    </div>
                </div>
            </div>

            <!--3줄-->
            <div class="book-list__box flex">
                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img11.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">까망이와 하양이</a>
                                <a href="#"><b>그림작가</b> 야엘 프랑켈</a>
                                <a href="#"><b>글작가</b> 장즈루, 순칭펑</a>
                                <a href="#"><b>페이지</b> 44쪽</a>
                                <a href="#"><b>출판사</b> 트리앤북</a>
                                <a href="#"><b>발행일</b> 2021-08-13</a>
                                <a href="#"><b>시리즈</b> 함께 생각하는 그림책</a>
                                <a href="#"><b>주제어</b> 친구, 소통, 공감 </a>
                                <a href="#"><b>연령별</b> 9~10세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-12</span>
                        <span>조회수 411</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img12.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">검은 머리 흰머리</a>
                                <a href="#"><b>그림작가</b> 민승지</a>
                                <a href="#"><b>글작가</b> 신복남</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 발견</a>
                                <a href="#"><b>발행일</b> 2021-08-06</a>
                                <a href="#"><b>주제어</b> 흰머리, 검은머리</a>
                                <a href="#"><b>연령별</b> 5~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-12</span>
                        <span>조회수 254</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img13.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">아파트</a>
                                <a href="#"><b>그림작가</b> 이석연</a>
                                <a href="#"><b>글작가</b> 이호백</a>
                                <a href="#"><b>페이지</b> 32쪽</a>
                                <a href="#"><b>출판사</b> 재미마주</a>
                                <a href="#"><b>발행일</b> 2021-08-03</a>
                                <a href="#"><b>시리즈</b> 재미마주 그림책</a>
                                <a href="#"><b>주제어</b> 아파트</a>
                                <a href="#"><b>연령별</b> 5~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-13</span>
                        <span>조회수 240</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img14.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">빨간 초코볼의 서울 여행</a>
                                <a href="#"><b>그림작가</b> 이석연</a>
                                <a href="#"><b>글작가</b> 이호백</a>
                                <a href="#"><b>페이지</b> 32쪽</a>
                                <a href="#"><b>출판사</b> 재미마주</a>
                                <a href="#"><b>발행일</b> 2021-08-02</a>
                                <a href="#"><b>시리즈</b> 서울 3부작 그림책</a>
                                <a href="#"><b>주제어</b> 여행, 서울</a>
                                <a href="#"><b>연령별</b> 5~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-12</span>
                        <span>조회수 210</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img15.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">딸기와 팡이</a>
                                <a href="#"><b>그림작가</b> 사토 메구미</a>
                                <a href="#"><b>글작가</b> 사토 메구미</a>
                                <a href="#"><b>번역</b> 황진희</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 올리</a>
                                <a href="#"><b>발행일</b> 2021-08-13</a>
                                <a href="#"><b>시리즈</b> 과일 채소 히어로즈</a>
                                <a href="#"><b>주제어</b> 과일, 채소, 노력</a>
                                <a href="#"><b>연령별</b> 3~6세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-12</span>
                        <span>조회수 327</span>
                    </div>
                </div>
            </div>

            <!--4줄-->
            <div class="book-list__box flex">
                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img16.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">섬섬은 고양이다</a>
                                <a href="#"><b>그림작가</b> 전미화</a>
                                <a href="#"><b>글작가</b> 전미화</a>
                                <a href="#"><b>페이지</b> 44쪽</a>
                                <a href="#"><b>출판사</b> 창비</a>
                                <a href="#"><b>발행일</b> 2021-08-09</a>
                                <a href="#"><b>주제어</b> 고양이, 반려동물</a>
                                <a href="#"><b>연령별</b> 3~6세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-12</span>
                        <span>조회수 341</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img17.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">그날 밤 무슨 일이…</a>
                                <a href="#"><b>그림작가</b> 생 순 라타나반</a>
                                <a href="#"><b>글작가</b> 생 순 라타나반</a>
                                <a href="#"><b>번역</b> 이경혜</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 풀과바람(바우솔)</a>
                                <a href="#"><b>발행일</b> 2021-08-19</a>
                                <a href="#"><b>주제어</b> 밤, 모험, 동물</a>
                                <a href="#"><b>연령별</b> 5~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-12</span>
                        <span>조회수 356</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img18.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">우리 좀 재워 줘</a>
                                <a href="#"><b>그림작가</b> 송은경B</a>
                                <a href="#"><b>글작가</b> 표영민</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 걸음동무(해솔)</a>
                                <a href="#"><b>발행일</b> 2021-08-31</a>
                                <a href="#"><b>시리즈</b> 감동이 있는 그림책</a>
                                <a href="#"><b>주제어</b> 꿈, 역지사지</a>
                                <a href="#"><b>연령별</b> 5~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-11</span>
                        <span>조회수 603</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img19.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">미지의 아이</a>
                                <a href="#"><b>그림작가</b> 히히</a>
                                <a href="#"><b>글작가</b> 김개미, 송선미, 임복순 외</a>
                                <a href="#"><b>페이지</b> 136쪽</a>
                                <a href="#"><b>출판사</b> 문학동네</a>
                                <a href="#"><b>발행일</b> 2021-08-04</a>
                                <a href="#"><b>주제어</b> 나</a>
                                <a href="#"><b>연령별</b> 9~10세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-11</span>
                        <span>조회수 250</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img20.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">우리는 매일 배우며 살아</a>
                                <a href="#"><b>그림작가</b> 존 J 무스</a>
                                <a href="#"><b>글작가</b> 존 J 무스</a>
                                <a href="#"><b>번역</b> 공경희</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 달리</a>
                                <a href="#"><b>발행일</b> 2021-08-02</a>
                                <a href="#"><b>시리즈</b> 존 무스 생각 그림책</a>
                                <a href="#"><b>주제어</b> 배움, 깨달음, 성장</a>
                                <a href="#"><b>연령별</b> 7~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-11</span>
                        <span>조회수 195</span>
                    </div>
                </div>
            </div>

            <!--5줄-->
            <div class="book-list__box flex">
                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img21.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">설탕 한 컵</a>
                                <a href="#"><b>그림작가</b> 존 J무스</a>
                                <a href="#"><b>글작가</b> 존 J무스</a>
                                <a href="#"><b>번역</b> 공경희</a>
                                <a href="#"><b>페이지</b> 32쪽</a>
                                <a href="#"><b>출판사</b> 달리</a>
                                <a href="#"><b>발행일</b> 2021-07-19</a>
                                <a href="#"><b>시리즈</b> 존 무스 생각 그림책</a>
                                <a href="#"><b>주제어</b> 위로, 고양이, 죽음</a>
                                <a href="#"><b>연령별</b> 7~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-11</span>
                        <span>조회수 206</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img22.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">돌멩이국</a>
                                <a href="#"><b>그림작가</b> 존 J무스</a>
                                <a href="#"><b>글작가</b> 존 J무스</a>
                                <a href="#"><b>번역</b> 이현주</a>
                                <a href="#"><b>페이지</b> 36쪽</a>
                                <a href="#"><b>출판사</b> 달리</a>
                                <a href="#"><b>발행일</b> 2021-07-12</a>
                                <a href="#"><b>시리즈</b> 존 무스 생각 그림책</a>
                                <a href="#"><b>주제어</b> 스님, 삶, 깨달음</a>
                                <a href="#"><b>연령별</b> 7~10세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-11</span>
                        <span>조회수 168</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img23.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">안녕, 쿠</a>
                                <a href="#"><b>그림작가</b> 존 J무스</a>
                                <a href="#"><b>글작가</b> 존 J무스</a>
                                <a href="#"><b>번역</b> 박소연</a>
                                <a href="#"><b>페이지</b> 32쪽</a>
                                <a href="#"><b>출판사</b> 달리</a>
                                <a href="#"><b>발행일</b> 2021-07-19</a>
                                <a href="#"><b>시리즈</b> 존 무스 생각 그림책</a>
                                <a href="#"><b>주제어</b> 사계절, 변화, 자연</a>
                                <a href="#"><b>연령별</b> 5~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-11</span>
                        <span>조회수 150</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img24.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">행복은 가까이 있어요</a>
                                <a href="#"><b>그림작가</b> 존 J무스</a>
                                <a href="#"><b>글작가</b> 존 J무스</a>
                                <a href="#"><b>번역</b> 박소연</a>
                                <a href="#"><b>페이지</b> 28쪽</a>
                                <a href="#"><b>출판사</b> 달리</a>
                                <a href="#"><b>발행일</b> 2021-07-19</a>
                                <a href="#"><b>시리즈</b> 존 무스 생각 그림책</a>
                                <a href="#"><b>주제어</b> 존중, 행복, 일상</a>
                                <a href="#"><b>연령별</b> 7~8세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-11</span>
                        <span>조회수 171</span>
                    </div>
                </div>

                <div class="book-list__box_in">
                    <div class="book-list__box_cont">
                        <div class="book-list__box_cont__book-img">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/book-img25.jpg" alt="">
                        </div>
                        <div class="book-list__box_cont__book-info">
                            <div class="book-list__box_cont__book-txt flex">
                                <a href="#">구석구석 명작 어드벤처 : 걸리버 여행기</a>
                                <a href="#"><b>글작가</b> 조나단 스위프트 원저</a>
                                <a href="#"><b>번역</b> 김하은</a>
                                <a href="#"><b>페이지</b> 40쪽</a>
                                <a href="#"><b>출판사</b> 스푼북</a>
                                <a href="#"><b>발행일</b> 2021-07-26</a>
                                <a href="#"><b>주제어</b> 여행, 모험</a>
                                <a href="#"><b>연령별</b> 9~10세</a>
                            </div>
                            <div class="book-list__box_cont__book-keep flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.22 27.8">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <polygon class="cls-1"
                                                points="0.5 0.5 0.5 26.93 13.11 19.56 25.72 26.93 25.72 0.5 0.5 0.5" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="book-list__box_cont__book-date">
                        <span>2021-08-11</span>
                        <span>조회수 179</span>
                    </div>
                </div>

            </div>

        </div>
        <div class="pages-btn flex">
            <img src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/pages-btn.svg" alt="">
        </div>
        <img class="dotted" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/dotted3.svg" alt="">
        <div class="book-side-menu">
            <ul>
                <li><a href="#">전체 그림책</a></li>
                <li><a href="#">한국 그림책</a></li>
                <li><a href="#">번역 그림책</a></li>
                <li><a href="#">원서 그림책</a></li>
                <li><a href="#">해외출간 그림책</a></li>
                <li><a href="#">전집 그림책</a></li>
                <li><a href="#">소장 그림책</a></li>
                <li><a href="#">그림책 관련 서적</a></li>
            </ul> 
        </div>
    </div>
</div>

<?php
require_once "foot.php";
?>