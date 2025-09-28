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

    <!-- noteブログ表示領域 -->
    <div class="container-fluid">
      <div class="info">

        <div class="topic-frame">
          <h5 class="sub-midashi"><strong><i class="fa-solid fa-blog custom-icon-topic"></i>最新ブログ（note）</strong></h5>
          <!-- noteウィジェット埋め込み -->
          <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="175385/"></script>
          <!-- end feedwind code -->


          <div style="margin-top:12px;font-size:0.95rem;">
            <a href="https://note.com/dreamy_myrtle334" target="_blank" rel="noopener">もっと見る（noteブログ一覧）</a>
          </div>
        </div>
        
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

        <div>
      	  <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="social-icons">
                <a href="https://twitter.com/shogyoku_s">
                  <img src="./photo-1/twitter-logo.jpg" class="twitter" alt="Twitter">
                </a>
                <a href="https://www.facebook.com/shougyoku.suzuki/?locale=ja_JP">
                  <img src="./photo-1/facebook-logo.png" class="facebook" alt="Facebook">
                </a>
              </div>
            </div>
          </div>
        </div>
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