<?php
$pageCode = 'portfolio';
$pageTitle = "portfolio3";
require_once "head.php";
?>

<link rel="stylesheet" href="pf.css">
<link rel="stylesheet" href="pf3.css" defer>
<script src="pf.js" defer></script>

<div id="pf-page">
    <div class="con flex">
        <div class="pg-left-box flex">
            <div class="pg-left-box__title">
                <img class="pf__project" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-project.svg" alt="">
            </div>
            <div class="pg-left-box__menu">
                <ul>
                    <li><a class="flex" href="pf.ssghtml.php">
                            <img style="width:22.2236px;" class="pf__1" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-1.svg" alt="">
                            <img style="width:178.6777px;" class="pf__1-txt" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-1-txt.svg"
                                alt="">
                        </a></li>
                    <li><a class="flex" href="pf2.ssghtml.php">
                            <img style="width:27.4561px;" class="pf__2" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-2.svg" alt="">
                            <img style="width:179.8047px;" class="pf__2-txt" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-2-txt.svg"
                                alt="">
                        </a></li>
                    <li><a class="flex" href="pf3.ssghtml.php">
                            <img style="width:27.4077px;" class="pf__3" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-3.svg" alt="">
                            <img style="width:130.7744px;" class="pf__3-txt" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-3-txt.svg"
                                alt="">
                        </a></li>
                    <li><a class="flex" href="pf4.ssghtml.php">
                            <img style="width:27.4077px;" class="pf__4" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-4.svg" alt="">
                            <img style="width:121.1992px;" class="pf__4-txt" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-4-txt.svg"
                                alt="">
                        </a></li>
                </ul>
            </div>
            <div class="pg-left-box__btn flex">
                <a href="#" class="process-btn">
                    <img class="" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-process-white.svg" alt="">
                    <img class="" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-process-black.svg" alt="">
                </a>
            </div>
        </div>
        <div class="pg-middle-box flex">
            <div class="pg-middle-box__line flex">
                <div class="pg-middle-box__img-box">
                    <img class="" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-3-img.png" alt=""> 
                </div>
            </div>
        </div>
        <div class="pg-right-box flex">
            <div class="pg-right-box__cont">
                <img class="pf-uxui-txt" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-uxui-txt.svg" alt=""> 
            </div>
        </div>
    </div>
</div>

<?php
require_once "foot.php";
?>