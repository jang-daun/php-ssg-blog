<?php
$title = "A.P.C. Home";

require_once "head.php";
?>

<link rel="stylesheet" href="index.css">
<script src="index.js" defer></script>


<script>
  // 주소 뒤에 / 를 붙여주는 코드
  // 오직 index.html, index.ssghtml.php 에도 추가해주세요.
  if (location.pathname.indexOf('index.ssghtml.php') !== -1 && location.pathname.indexOf('index.html') !== -1 &&
    location.pathname.substr(-1, 1) != '/') {
    location.replace(location.href + '/');
  }
</script>

<div class="section-2">
    <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/mb.jpg" alt="">
    <div class="con">
        <img src="https://cdn.jsdelivr.net/gh/jang-daun/web-resource/apc/mainapc.svg" alt="">
    </div>
</div>





<?php
require_once "foot.php";
?>