<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$siteTitle?></title>


    <!--폰트 어썸-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!--제이쿼리-->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--반응형 필수-->
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <!--토스트 UI-->
    <!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">

    <!-- 토스트 UI 에디터, 자바스크립트 코어 -->
    <script defer src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>

    <!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css">
    <!-- 토스트 UI 에디터, CSS 코어 -->
    <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css">

    <!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
    <script defer
        src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight.min.js">
    </script>

    <!--토스트 UI끝-->

    <link rel="stylesheet" href="css/common.css">
    <script defer src="js/common.js"></script>



</head>

<body>
    <div class="cursor"></div>
    <div class="cursor-shadow"></div>

    <div class="body-content">
        <!--탑바 시작-->
        <header class="top-bar con-min-width visible-md-up">
            <div class="con height-100p">
                <nav class="top-bar__menu-box-1 height-100p">
                    <ul class="flex height-100p">
                        <div class="logo"><img src="https://jang-daun.github.io/myblog/img/logo/logo-4.svg" alt="">
                        </div>
                        <div class="flex-grow"></div>
                        <li><a href="index.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                                <span>HOME</span>
                                <!--<span><i class="fas fa-home"></i></span>--></a>
                        </li>
                        <li><a href="about.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                                <span>ABOUT</span>
                                <!--<span><i class="fas fa-street-view"></i></span>--></a></li>
                        <li>
                            <a href="pf.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                                <span>PORTFOLIO</span>
                                <!--<span><i class="fas fa-list-alt"></i></span>-->
                            </a>
                        </li>
                        <li><a href="#" class="flex flex-jc-c flex-ai-c height-100p">
                                <span>ARTICLES</span>
                                <!--<span><i class="fas fa-newspaper"></i></span>--></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--탑바 끝-->

        <!--모바일 탑바 시작-->
        <div class="mobile-top-bar-padding visible-sm-down"></div>

        <header class="mobile-top-bar con-min-width visible-sm-down flex">
            <div class="mobile-top-bar__btn-toggle-side-bar flex-as-c flex-1-0-0">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mobile-logo-box">
                <img src="https://jang-daun.github.io/myblog/img/logo/heart-2.svg" alt="">
            </div>
            <div class="flex-1-0-0"></div>
        </header>
        <!--모바일 탑바 끝-->

        <!--모바일 사이드 바 시작-->

        <div data-sel-index="0" class="mobile-side-bar visible-sm-down">
            <article></article>
            <nav class="mobile-side-bar__menu-box-1 visible-sm-down">
                <ul>
                    <li>
                        <a href="index.ssghtml.php" class="block">
                            <span>HOME</span>
                            <!--<span><i class="fas fa-home"></i></span>-->
                        </a>
                    </li>
                    <li>
                        <a href="about.ssghtml.php" class="block">
                            <span>ABOUT</span>
                            <!--<span><i class="fas fa-street-view"></i></span>-->
                        </a>
                    </li>
                    <li>
                        <a href="pf.ssghtml.php" class="block">
                            <span>PORTFOLIO</span>
                            <!--<span><i class="fas fa-list-alt"></i></span>-->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block">
                            <span>ARTICLES</span>
                            <!--<span><i class="fas fa-newspaper"></i></span>-->
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--모바일 사이드 바 끝-->

        <main class="">