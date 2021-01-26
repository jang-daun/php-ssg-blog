<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "downloadingthelist";

//윤승현

//게시물1
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "HTML : 1화 기본";
$article1["regDate"] = "2020-01-12 17:49:14";
$article1["writerName"] = "윤승현";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-2"></use></svg>';
$article1["tags"] = ["html"];
$article1["body"] = <<<'EOT'
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
EOT;

//게시물2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "HTML : 2화 기본";
$article2["regDate"] = "2020-01-13 17:49:14";
$article2["writerName"] = "윤승현";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-2"></use></svg>';
$article2["tags"] = ["html"];
$article2["body"] = <<<'EOT'
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
EOT;

//게시글4
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "CSS : 1화 기본 css";
$article3["regDate"] = "2020-01-12 17:49:14";
$article3["writerName"] = "장다운";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"] = ["css"];
$article3["body"] = <<<'EOT'
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
EOT;


//게시글 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "CSS : 2화 선택자";
$article4["regDate"] = "2020-01-12 21:26:00";
$article4["writerName"] = "장다운";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["tags"] = ["css"];
$article4["body"] = <<<'EOT'
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
EOT;

$article5 = [];
$article5["id"] = 5;
$article5["title"] = "CSS : 3화 선택자 적용 우선 순위";
$article5["regDate"] = "2020-01-12 22:01:40";
$article5["writerName"] = "장다운";
$article5["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article5["tags"] = ["css"];
$article5["body"] = <<<'EOT'
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
EOT;


//게시글 6

$article6 = [];
$article6["id"] = 6;
$article6["title"] = "JS : 1화 기초";
$article6["regDate"] = "2020-01-12 12:12:14";
$article6["writerName"] = "김상화";
$article6["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-3"></use></svg>';
$article6["tags"] = ["js"];
$article6["body"] = <<<'EOT'
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
```d
- 브라우저에서 작성한 HTML 파일을 불러들여 결과를 확인한다.
EOT;


//게시글 7

$article7 = [];
$article7["id"] = 7;
$article7["title"] = "JS : 2화 명령어";
$article7["regDate"] = "2020-01-12 12:12:14";
$article7["writerName"] = "김상화";
$article7["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-3"></use></svg>';
$article7["tags"] = ["js"];
$article7["body"] = <<<'EOT'
# 개발자도구 (Developer Console)
```
- 브라우저의 우측 상단 메뉴에서 더보기, 개발자 도구 메뉴를 이용해 활성화
- 여러 탭 중 console 탭을 사용해 console 을 확인 가능
- 직접 명령어를 입력해 실행 가능하며 (>) , 그 결과를 바로 확인 가능 (<)
```

# console.log 명령어
```
console.log 뒤에 따라오는 괄호 안에 들어있는 메시지를 콘솔창에 출력하는 명령어
```
EOT;

//게시글 8

$article8 = [];
$article8["id"] = 8;
$article8["title"] = "JS : 3화 변수";
$article8["regDate"] = "2020-01-12 12:12:14";
$article8["writerName"] = "김상화";
$article8["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-3"></use></svg>';
$article8["tags"] = ["js"];
$article8["body"] = <<<'EOT'
# 변수 선언과 초기화

<h2>변수</h2>

- 프로그램 실행 도중 임의의 값을 저장해 두고 읽을 수 있는 공간
- 변수의 선언과 초기화
- 선언 : 컴퓨터에게 변수를 사용할 것이라고 선언(알려주는) 역할
- 초기화 : 선언한 변수에 처음으로 값을 저장하는 과정
- 변수에 값을 저장하는 법 : 대입연산자 (=) 를 활용
- 콤마(,)를 활용해 여러 변수를 동시에 선언, 초기화 가능

```
var variable_name;
variable_name = value;
```
# prompt() 명령어
- promprt 뒤에 따라오는 괄호 안에 들어있는 메세지를 사용자에게 보여주고, 문자열을 입력받는 명령
- 변수에 값을 저장하는 구문과 함께 사용해서, 사용자가 입력한 값을 변수에 저장 가능
```
var name=prompt("이름을 입력해 주세요");
```
EOT;

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}