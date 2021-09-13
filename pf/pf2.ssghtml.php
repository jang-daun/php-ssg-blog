<?php
$pageCode = 'portfolio';
$pageTitle = "portfolio2";
require_once "head.php";
?>

<link rel="stylesheet" href="pf.css">
<link rel="stylesheet" href="pf2.css" defer>
<script src="pf.js" defer></script>


<div class="port__section">

    <!--personal-->
    <div class="port__section port__section_personal con-min-width">
        <div class="con flex">
            <div class="port__section-left flex">
                <div class="port__section-left__tto">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/portimg/port_tto.svg">
                </div>
                <div class="port__section-left__menu">
                    <ul>
                        <li><a href="pf.ssghtml.php">
                                1. Personal Website
                            </a></li>
                        <li><a href="pf2.ssghtml.php">
                                2. Website Renewal
                            </a></li>
                        <li><a href="pf3.ssghtml.php">
                                3. Mobile UX | UI
                            </a></li>
                        <li><a href="pf4.ssghtml.php">
                                4. Event Page
                            </a></li>
                    </ul>
                </div>
                <div class="port__section-left__title">
                    <div class="port_left_title_back"></div>
                    <div class="port_left_title">
                        Website<br>Renewal
                    </div>
                    <div class="port_left_cont">
                        웹 사이트 리뉴얼 ‘그림책 박물관’
                    </div>
                </div>
            </div>
            <div class="port__section-middle">

            </div>
            <div class="port__section-right flex">
                <div class="port__section-right_img">
                    <img class="port_renewal" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/portimg/port_renewal3.png">
                </div>
                <div class="port__section-right_explan">
                    웹사이트 리디자인 / June 2021 / 기획, 디자인 100%
                </div>
                <div class="port__section-right_site2 flex">
                    <div class="site2-box">
                        <a target="_blank" href="#">Process</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/portimg/shape.svg">
                    </div>
                    <div class="site2-box">
                        <a target="_blank" href="#">Web site</a>
                        <img src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/portimg/shape.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php
require_once "foot.php";
?>