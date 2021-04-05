<?php
$pageCode = 'about';
$pageTitle = "ABOUT";
require_once "head.php";
?>
<script src="../package/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="about.css">
<script src="about.js" defer></script>

<div class="circle"></div>


<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="contain">
                <div class="orbit">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/no1.svg" alt="">
                </div>
                <div class="slogan">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/aboutslogan.svg" alt="">
                </div>
                <div class="content">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/aboutcontent.svg" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="contain">
                <div class="orbit">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/no2.svg" alt="">
                </div>
                <div class="title">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/tt.svg" alt="">
                </div>
                <div class="pfcontent">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/profilecontent.svg" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="contain">
                <div class="orbit">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/no3.svg" alt="">
                </div>
                <div class="ability">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/ability.svg" alt="">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/portfolio/ability-c.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<?php
require_once "foot.php";
?>