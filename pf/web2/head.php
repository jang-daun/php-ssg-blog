<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.P.C. - <?=$title?></title>

    <!--폰트 시작-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
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

</head>

<body>
    <!--header시작-->
    <div class="header con-min-width">
        <div class="con">
            <div class="header__menu-box">
                <a href="#">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/join.svg" alt="">
                </a>
                <a href="#">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/wish.svg" alt="">
                </a>
                <a href="#">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/cart.svg" alt="">
                </a>
                <a href="#">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/news.svg" alt="">
                </a>
                <a href="#">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/id.svg" alt="">
                </a>
                <a href="#">
                    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/ko.svg" alt="">
                </a>
            </div>
        </div>
    </div>


    <div class="section-1 con-min-width">
        <div class="con menu-box">
            <a href="index.ssghtml.php" class="logo">
                <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/apclogo.svg" alt="">
            </a>
            <nav class="menu-box__menu-bar flex flex-j-c">
                <ul class="">
                    <li>
                        <a href="#">
                            <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/sa1.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="shop.ssghtml.php"><img
                                src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/sh1.svg" alt=""></a>
                        <ul class="flex">
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/new.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/outer.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/top.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/bottom.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/dress.svg"
                                        alt=""></a></li>
                            <li><a href="bag.ssghtml.php"><img
                                        src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/bag.svg" alt=""></a>
                            </li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/shoes.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/acc.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/goods.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img
                                        src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/Jewellry.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img
                                        src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/lookbook.svg"
                                        alt=""></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="denim.ssghtml.php"><img
                                src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/de1.svg" alt=""></a>
                        <ul>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/women.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/men.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/butel.svg"
                                        alt=""></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="quilts.ssghtml.php"><img
                                src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/qu1.svg" alt=""></a>
                    </li>
                    <li>
                        <a href="overstock.ssghtml.php"><img
                                src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/ov1.svg" alt=""></a>

                    </li>
                    <li>
                        <a href="cal.ssghtml.php"><img
                                src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/ch1.svg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img
                                src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/search.svg" alt=""></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>