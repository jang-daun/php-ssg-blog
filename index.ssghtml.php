<?php
require_once "data.php";
require_once "head.php";
?>
<link rel="stylesheet" href="css/index.css">
<script defer src="js/index.js"></script>

<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      LATEST ARTICLES
    </span>
  </h1>
</section>
<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title">HTML : 1화 기본</h1>
          <div class="article-list-box__reg-date">2020-01-12 17:49:14</div>
          <div class="article-list-box__writer">
            <span>윤승현</span>
            <span>
              <svg viewBox="0 0 264 280">
                <use xlink:href="#avatar-2"></use>
              </svg>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # HTML의 개념
- HTML(Hyper Text Markup Language)
- 페이지의 제목, 문단, 표, 이미지, 동영상 등을 정의하고 그 구조와 의미를 부여하는 정적 언어로 웹의 구조를 담당함.
- 건물의 뼈대, 무대에서의 배우 개념으로 볼 수 있음.              
```html
<div></div> 
<div>구성요소</div>
```
# 태그의 기본 형태
```codepen
https://codepen.io/Yun_SH/embed/KKgGgVd?height=450&theme-id=dark&default-tab=html,result&editable=true
```
# 속성과 값
```codepen
https://codepen.io/Yun_SH/embed/NWROrVV?height=450&theme-id=dark&default-tab=html,result&editable=true
```
                              </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<br>
<br>
<br>
<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title">HTML : 2화 기본</h1>
          <div class="article-list-box__reg-date">2020-01-13 17:49:14</div>
          <div class="article-list-box__writer">
            <span>윤승현</span>
            <span>
              <svg viewBox="0 0 264 280">
                <use xlink:href="#avatar-2"></use>
              </svg>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # 부모와 자식 요소
- 태그 A가 태그 B의 콘텐츠로 사용될 시에, 태그 B는 태그 A의 부모 요소, 태그 A는 태그 B의 자식 요소라고 함.
```html
<부모태그>
    <자식태그></자식태그>
</부모태그>
```
```codepen
https://codepen.io/Yun_SH/embed/bGwmZjm?height=450&theme-id=dark&default-tab=html,result&editable=true
```
                              </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>




<br>
<br>
<br>
<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title">CSS : 1화 기본 css</h1>
          <div class="article-list-box__reg-date">2020-01-12 17:49:14</div>
          <div class="article-list-box__writer">
            <span>장다운</span>
            <span>
              <svg viewBox="0 0 264 280">
                <use xlink:href="#avatar-1"></use>
              </svg>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # 기본 문법
              
```html
body(선택자) {
color(속성):blue(값);
}
```
# 외부 스타일 / 내부 스타일
```html
<head>
    <link rel="stylesheet" href-"style.css"> - 외부 스타일

    <style type="text/css"> - 내부 스타일
        body {
        color: blue;
        font-size: 14px;
        }
    </style>
</head>
```
                              </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<br>
<br>
<br>
<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title">CSS : 2화 선택자</h1>
          <div class="article-list-box__reg-date">2020-01-12 21:26:00</div>
          <div class="article-list-box__writer">
            <span>장다운</span>
            <span>
              <svg viewBox="0 0 264 280">
                <use xlink:href="#avatar-1"></use>
              </svg>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # 선택자 종류
              
```html
html 
1) <p> tag </p>
2) <p class="br"> tag </p>
3) <p id="br"> tag </p>
4) <div class="br"> tag </div>
```
```css
css
- 태그 선택자 (1,2,3,4)
p {
    color:red;
}

- 클래스 선택자 class (2,3,4)
.p {
    color:red;
}

- 아이디 선택자 id (3)
#p {
    color:red;
}
- 태그와 함께 쓰는 선택자 (2)
p.br {
    color:red;
}
```
# 그룹 선택자
- 그룹으로 묶어 동일한 css 적용
```html
p1, p2 {
    color:red;
}
```

# 하위 선택자
- 선택자와 선택자 사이의 '>' : 자식 선택자
- 선택자와 선택자 사이의 ' ' : 후손 선택자
```html
html
<nav>
    <div>
        <span></span>
    </div>
</nav>
```
```css
css
nav > div {
    color:red;
}

nav span {
    color:red;
}
```
# 전체 선택자
- '*' 사용
```css
* {
    color:red;
}
```
# 주석 처리
- 코드상엔 보이지만 브라우저에선 출력되지 않는 것
- /* */ 사용
```css
/* this is a single-line */
```
                              </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<br>
<br>
<br>
<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title">CSS : 3화 선택자 적용 우선 순위</h1>
          <div class="article-list-box__reg-date">2020-01-12 22:01:40</div>
          <div class="article-list-box__writer">
            <span>장다운</span>
            <span>
              <svg viewBox="0 0 264 280">
                <use xlink:href="#avatar-1"></use>
              </svg>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # 적용 순위
- 동일한 css 속상이 중복 사용되는 경우 우선 순위에 따라 적용 됨              
- 1순위: !important Style 
- 2순위 : inline Style
- 3순위 : id Style
- 4순위 : class Style
- 5순위 : tag Style
```codepen
https://codepen.io/jang-daun/embed/VwKEKvd?height=265&theme-id=light&default-tab=html,css,result
```
                              </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>


<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title">JS : 1화 기초</h1>
          <div class="article-list-box__writer">2020-01-12 12:12:14</div>
          <div class="article-list-box__writer">
            <span>김상화</span>
            <span>
              <svg viewBox="0 0 264 280">
                <use xlink:href="#avatar-3"></use>
              </svg>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # 실습환경 만들기

Javascript의 특징
```html
HTML+CSS와 함께 사용해 client side 웹 프로그램을 작성할 수 있다.
웹 브라우저에서 바로 실행이 가능하다.
```
alert 명령어
```html
alert 뒤에 따라오는 괄호 안에 들어있는 메시지를 브라우저 경고창에 띄워주는 명령어
```
실습방법
- Javascript 코드를 작성한다.
- lecture01.js
```html
alert("hello world");
```
- 해당 코드를 로드하는 HTML 파일을 작성한다
- index.html
```html
<html>
    <head>
        ...
        
        <<!--REPLACE:script-->></<!--REPLACE:script-->>
        ...
        </head>
        <>
        ...
    </ body>
</html>
```
- 브라우저에서 작성한 HTML 파일을 불러들여 결과를 확인한다.

                      </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php
require_once "foot.php";
?>