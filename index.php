<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php include 'head.php'; ?>
  </head>

  <body>
    <?php include 'header.php'; ?>

  	<div class="container-fluid">
      <div style="text-align: center">
        <aside id="mainimg">
          <img src="./photo-1/TP_A_差替え.jpg" alt="TOPページ画像A" id="slide1">
          <img src="./photo-1/TP_B_差替え.jpg" alt="TOPページ画像B" id="slide2">  
        </aside>
      </div>
	  </div>

  	<div class="container-fluid">
  	  <div class="row">
        <div class="col-sm-3 col-6 link-block">
          <a href="kiseki.php">
            <img src="./photo-1/軌跡01.jpg" class="img-fluid img1" alt="">
            <img src="./photo-1/軌跡02.jpg" class="img-fluid img2" alt="">
          </a>
        </div>
        <div class="col-sm-3 col-6 link-block">
          <a href="jirei.php">
            <img src="./photo-1/事例01.jpg" class="img-fluid img1" alt="">
            <img src="./photo-1/事例02.jpg" class="img-fluid img2" alt="">
          </a>
        </div>
        <div class="col-sm-3 col-6 link-block">
          <a href="ofuda.php">
            <img src="./photo-1/販売01.jpg" class="img-fluid img1" alt="">
            <img src="./photo-1/販売02.jpg" class="img-fluid img2" alt="">
          </a>
        </div>
        <div class="col-sm-3 col-6 link-block">
          <a href="soudan.php">
            <img src="./photo-1/相談01.jpg" class="img-fluid img1" alt="">
            <img src="./photo-1/相談02.jpg" class="img-fluid img2" alt="">
          </a>
        </div>
      </div>
  	</div>

    <div class="container-fluid">
      <div class="info">

        <!-- SNSアイコン -->
        <div>
      	  <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="social-icons text-center">
                <a href="https://www.facebook.com/shougyoku.suzuki/?locale=ja_JP" target="_blank" rel="noopener">
                  <i class="fab fa-facebook-f facebook-icon"></i>
                </a>
                <a href="https://note.com/dreamy_myrtle334" target="_blank" rel="noopener">
                  <i class="fas fa-blog note-icon"></i>
                </a>
                <a href="https://www.youtube.com/@suzukisyogyoku" target="_blank" rel="noopener">
                  <i class="fab fa-youtube youtube-icon"></i>
                </a>
                <a href="https://twitter.com/shogyoku_s" target="_blank" rel="noopener">
                  <i class="fab fa-twitter twitter-icon"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- SNSアイコン ここまで　-->

        <!-- noteブログ表示領域 -->
        <div class="topic-frame">
          <h5 class="sub-midashi"><strong><i class="fa-solid fa-blog custom-icon-topic"></i>最新ブログ（note）</strong></h5>
          <!-- noteウィジェット埋め込み 照玉 | https://note.com/dreamy_myrtle334/rss -->              
          <?php
          $rss_url = 'https://note.com/dreamy_myrtle334/rss';
          $rss = simplexml_load_file($rss_url);

          $items = [];
          if ($rss && isset($rss->channel->item)) {
              foreach ($rss->channel->item as $entry) {
                  $items[] = $entry;
              }
              $items = array_slice($items, 0, 3); // 最新3件

              echo '<ul class="note-feed">';
              foreach ($items as $item) {
                  $title = htmlspecialchars($item->title, ENT_QUOTES, 'UTF-8');
                  $link = htmlspecialchars($item->link, ENT_QUOTES, 'UTF-8');
                  $pubDate = date('Y年n月j日', strtotime($item->pubDate));
                  $description = strip_tags($item->description);
                  $description = str_replace('続きをみる', '<a href="' . $link . '" target="_blank">続きはこちら</a>', $description);

                  echo '<li>';
                  echo '<a href="' . $link . '" target="_blank"><strong>' . $title . '</strong></a><br>';
                  echo '<small>' . $pubDate . '</small><br>';
                  echo '<p>' . $description . '</p>';
                  echo '</li>';
              }
              echo '</ul>';
          } else {
              echo '<p>RSSの取得に失敗しました。</p>';
          }
          ?>
          <!-- noteウィジェット埋め込みここまで -->
          <div style="margin-top:12px;font-size:0.95rem;">
            <a href="https://note.com/dreamy_myrtle334" target="_blank" rel="noopener">もっと見る（noteブログ一覧）</a>
          </div>
        </div>
        <!-- noteブログ表示領域 ここまで -->
         
        <!-- トピック表示領域 -->
        <div class="topic-frame">
          <h5 class="sub-midashi"><strong><i class="fa-solid fa-eye custom-icon-topic"></i>トピック</strong></h5>

      	  <div class="row">
            <div class="col-lg-8 mx-auto">
              <p><i class="fa-solid fa-eye custom-icon-topic"></i>神霊導師・鈴木照玉先生のYouTubeチャンネル開設！</p>
              <p>
                <a href="https://www.youtube.com/@suzukisyogyoku">＜神の力　霊能者・鈴木照玉＞</a><br>
                高評価、チャンネル登録をよろしくお願いいたします！！
              </p>
              <div style="text-align: center;">
                <iframe src="https://www.youtube.com/embed/XGJkRVtEH3o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        
      	  <div class="row">
            <div class="col-lg-8 mx-auto mt-4">
              <p>
                <strong>
                  <i class="fa-solid fa-eye custom-icon-topic"></i>
                  神霊導師・鈴木照玉先生がYouTube番組・K-MEN ch<br>
                  【キッチンカーエンターテイメント】に出演！ <br>
                  ＜心霊スポット・東京都八王子市の滝山城跡を巡る＞
                </strong>
              </p>
              <div class="d-flex justify-content-center flex-wrap gap-3">
                  <iframe src="https://www.youtube.com/embed/lTAbclN96QU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <iframe src="https://www.youtube.com/embed/p6zjbdvJcW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <!-- 他のトピックもここに続けて配置 -->
        </div>
        <!-- トピック表示領域 ここまで -->

      </div>
    </div>

    <div class="container-fluid">
      <div style="text-align:center">
        <a href="kiseki.php">
          <img src="./photo-1/軌跡／発光.jpg" class="img-fluid" alt="Kiseki">
        </a>
        <a href="jirei.php">
          <img src="./photo-1/事例発光01.jpg" class="img-fluid" alt="girei">
        </a>
        <a href="ofuda.php">
          <img src="./photo-1/御札発光01.jpg" class="img-fluid" alt="ofuda">
        </a>
        <a href="soudan.php">
          <img src="./photo-1/相談／発光.jpg" class="img-fluid" alt="soudan">
        </a>
      </div>
    </div>

   <?php include 'footer.php'; ?>

    <!-- body code goes here -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.4.1.js"></script>
    <script src="js/image-switch.js"></script>
  </body>
</html>