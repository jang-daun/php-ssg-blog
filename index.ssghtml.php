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
          <h1 class="article-list-box__title"><?=$article3["title"]?></h1>
          <div class="article-list-box__reg-date"><?=$article3["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article3["writerName"]?></span>
            <span>
              <?=$article3["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article3["body"]?>
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
          <h1 class="article-list-box__title"><?=$article4["title"]?></h1>
          <div class="article-list-box__reg-date"><?=$article4["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article4["writerName"]?></span>
            <span>
              <?=$article4["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article4["body"]?>
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
          <h1 class="article-list-box__title"><?=$article5["title"]?></h1>
          <div class="article-list-box__reg-date"><?=$article5["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article5["writerName"]?></span>
            <span>
              <?=$article5["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article5["body"]?>
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
          <h1 class="article-list-box__title"><?=$article6["title"]?></h1>
          <div class="article-list-box__writer"><?=$article6["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article6["writerName"]?></span>
            <span>
              <?=$article6["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article6["body"]?>
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