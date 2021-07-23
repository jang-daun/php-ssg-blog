<?php
require_once "data.php";
require_once "head.php";
$articles = &getArticles();
?>

<link rel="stylesheet" href="css/index.css">
<script defer src="js/index.js"></script>




<section id="banner">
    <div class="slide-wrapper">
        <div class="slideimg">
            <img class="line" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/bgcloud.jpg" alt="">
        </div>
        <div class="slideimg">
            <img class="line" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/bgocean.jpg" alt="">
        </div>
        <div class="slideimg">
            <img class="line" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/bgflower.jpg" alt="">
        </div>
    </div>
</section>


<img class="down" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/down.svg" alt="">
<img class="thelist" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/thelist.svg" alt="">


<img class="deco circle1" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/1.svg" alt="">
<img class="deco circle2" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/2.svg" alt="">
<img class="deco sline1" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/3.svg" alt="">
<img class="deco sline2" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/4.svg" alt="">
<img class="deco sline3" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/5.svg" alt="">
<img class="deco sline4" src="https://cdn.jsdelivr.net/gh/jang-daun/phpblog/img/6.svg" alt="">


<?php
require_once "foot.php";
?>