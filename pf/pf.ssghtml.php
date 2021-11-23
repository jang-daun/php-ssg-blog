<?php
$pageCode = ' ';
$pageTitle = " ";
require_once "head.php";
?>

<link rel="stylesheet" href="pf.css">
<link rel="stylesheet" href="pf1.css">
<script src="pf.js" defer></script>


<div id="pf-page">
    <img class="pf__bg" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-bg.jpg" alt="">
    <div class="con flex">
        <div class="pg-left-box flex bb">
            <div class="pg-left-box__title bb">
                <img class="pf__project" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/pf-project.svg" alt="">
            </div>
            <div class="pg-left-box__menu bb">
                <ul>
                    <li><a class="flex" href="pf.ssghtml.php">
                            <span>1.</span>
                            <span>Personal Website</span>
                        </a></li>
                    <li><a class="flex" href="pf2.ssghtml.php">
                            <span>2.</span>
                            <span>Website Renewal</span>
                        </a></li>
                    <li><a class="flex" href="pf3.ssghtml.php">
                            <span>3.</span>
                            <span>Mobile UX | UI</span>
                        </a></li>
                    <li><a class="flex" href="pf4.ssghtml.php">
                            <span>4.</span>
                            <span>Event Page</span>
                        </a></li>
                </ul>
            </div>
            <div class="pg-left-box__btn bb"></div>
        </div>
        <div class="pg-middle-box bb">
            <div class="pg-middle-box__line bb"></div>
            <div class="pg-middle-box__photo bb"></div>
        </div>
        <div class="pg-right-box bb">
            <div class="pg-right-box__cont bb"></div>
        </div>
    </div>
</div>




<?php
require_once "foot.php";
?>