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
                    <option value="5">5</option>
                    <option value="10" selected="selected">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                </select>
            </div>
            <img class="book-pg-dotted" src="https://cdn.jsdelivr.net/gh/jang-daun/fairytale/img/dotted2.svg"
                    alt="">
        </div>
        <div class="book-list">
            <div class="book-list__box flex">
                <div class="book-list__box_cont"></div>
                <div class="book-list__box_cont"></div>
                <div class="book-list__box_cont"></div>
                <div class="book-list__box_cont"></div>
            </div>
        </div>
    </div>
</div>

<?php
require_once "foot.php";
?>