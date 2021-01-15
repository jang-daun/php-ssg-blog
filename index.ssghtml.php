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
          <h1 class="article-list-box__title"><a href="article_detail_1.ssghtml.php"><?=$article1["title"]?></a></h1>
          <div class="article-list-box__reg-date"><?=$article1["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article1["writerName"]?></span>
            <span>
              <?=$article1["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article1["body"]?>
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
          <h1 class="article-list-box__title"><a href="article_detail_2.ssghtml.php"><?=$article2["title"]?></a></h1>
          <div class="article-list-box__reg-date"><?=$article2["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article2["writerName"]?></span>
            <span>
              <?=$article2["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article2["body"]?>
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
          <h1 class="article-list-box__title"><?=$article11["title"]?></h1>
          <div class="article-list-box__reg-date"><?=$article11["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article11["writerName"]?></span>
            <span>
              <?=$article11["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article11["body"]?>
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
          <h1 class="article-list-box__title"><?=$article12["title"]?></h1>
          <div class="article-list-box__reg-date"><?=$article12["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article12["writerName"]?></span>
            <span>
              <?=$article12["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article12["body"]?>
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
          <h1 class="article-list-box__title"><?=$article13["title"]?></h1>
          <div class="article-list-box__reg-date"><?=$article13["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article13["writerName"]?></span>
            <span>
              <?=$article13["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article13["body"]?>
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
          <h1 class="article-list-box__title"><?=$article21["title"]?></h1>
          <div class="article-list-box__writer"><?=$article21["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article21["writerName"]?></span>
            <span>
              <?=$article21["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article21["body"]?>
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