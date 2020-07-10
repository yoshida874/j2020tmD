<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Our Story - MeFamily Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets1/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MeFamily - v2.0.0
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="Home_Page.php">サイト名</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="active"><a href="Userprofile_Page.php">マイページ</a></li>
          <li><a href="event_search.php">新着イベント</a></li>
          <li><a href="event_edit.php">イベント編集</a></li>
          <li><a href="event_create.php">イベント作成</a></li>
          <li class="login"><a href="Login_Page.php"><i class="fas fa-sign-in-alt">ログイン</i></a></li>
          <!--<li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>-->

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<!-- ======= 入力欄 ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <br><h2>イベントの編集</h2>
        <p>過去に申請したイベント内容の編集ができます</p>
      </div>

      <div class="button_wrapper">
        <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="text-align:center">データ呼び出し</button>

      <div class="">
        <form name="form1" action="" method="post" enctype="multipart/form-data"
            class="contactform">
              <div class="form-group">
                  <p style="margin-bottom: 0px;">イベント名<span style="color: red;">*必須</span></p>
                  <input type="password" name='event_name' class="form-control input-sm" id="kaisai_pass"
                      placeholder="イベント名を入力" value="">
                  <div class="validation"></div>
              </div>
              <div class="form-group">
                <p style="margin-bottom: 0px;">開催団体</p>
                <input type="text" name='holding_name' class="form-control input-sm" id="kaisai_name"
                    placeholder="開催団体を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
                    value="">
                <div class="validation"></div>
            </div>
            <div class="form-group">
              <p style="margin-bottom: 0px;">画像</p>
              <input type="file" name='image' class="form-control input-sm" id="kaisai_name"
                  placeholder="開催団体を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
                  value="">
              <div class="validation"></div>
          </div>
            <div class="form-group">
              <p style="margin-bottom: 0px;">主催者<span style="color: red;">*必須</span></p>
              <input type="text" name='organizer' class="form-control input-sm" id="kaisai_name"
                  placeholder="主催者を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
                  value="">
              <div class="validation"></div>
          </div>
          <div class="form-group">
            <p style="margin-bottom: 0px;">ハッシュタグ</p>
            <input type="text" name='hashtag' class="form-control input-sm" id="kaisai_name"
                placeholder="ハッシュタグを入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
                value="">
            <div class="validation"></div>
          </div>
          <div class="form-group">
          <p style="margin-bottom: 0px;">参加費用</p>
          <input type="text" name='cost' class="form-control input-sm" id="kaisai_name"
              placeholder="参加費用を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
              value="">
          <div class="validation"></div>
          </div>
          <!--<div class="form-group">
            <p style="margin-bottom: 0px;">イベント説明文</p>
          <input type="textarea" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
            placeholder="説明文を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
            value="">
          <div class="validation"></div>
          </div>-->
          <div class="form-">
      <p style="margin-bottom: 0px;">イベント説明文</p>
    <textarea name='event_description' class="form-control input-sm" id="kaisai_name" 
    placeholder="説明文を入力" size="20" data-rule="minlen:1" rows="10" cols="127" data-msg="値を入力してください"
    value=""></textarea>
  </div>

  <div style="border: 2px solid #000000; width: 1110px; height: 280px;">
    <div>
        <table>
        <!-- 開催日程-->
        <tr>開催日程・募集期間<span style="color: red;">*必須</span></tr>
      <tr>
          <td>開始日時</td>
          <td>
            <table>
              <tr>
              <td>日</td>
              <td><input type="text" name='start_day' class="form-control input-sm" id="kaisai_name"
                placeholder="日にちを入力" size="20" style="width:1000px;" data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
              </tr>
              <tr>
              <td>時間</td>
              <td><input type="text" name='start_time' class="form-control input-sm" id="kaisai_name"
                placeholder="時間を入力" size="20" style="width:1000px;" data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
              </tr>
          </table>
          </td>
      </tr>
      <!-- 終了日時-->
      <tr>
          <td>終了日時</td>
          <td>
            <table>
              <tr>
              <td>日</td>
              <td><input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
                placeholder="日にちを入力" size="20" style="width:1000px;" data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
              </tr>
              <tr>
              <td>時間</td>
              <td><input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
                placeholder="時間を入力" size="20" style="width:1000px;" data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
              </tr>
          </table>
          </td>
  <!-- 募集開始〜終了-->
  <tr>
    <td>
    募集開始
    <p>〜終了日</p>
    </td>
    <td>
    <table>
        <tr>
        <td>日</td>
        <td><input type="text" name='end_day' class="form-control input-sm" id="kaisai_name"
          placeholder="日にちを入力" size="20" style="width:1000px;" data-rule="minlen:1" data-msg="値を入力してください"
          value=""></td>
        </tr>
        <tr>
        <td>時間</td>
        <td><input type="text" name='end_time' class="form-control input-sm" id="kaisai_name"
          placeholder="時間を入力" size="20" style="width:1000px;" data-rule="minlen:1" data-msg="値を入力してください"
          value=""></td>
        </tr>
        </table>
        </tr>
        </div>
        </form>
        </div>
        </section>
    </table>
    </td>
</tr>

  </table>
</div>
    
<br><div style="border: 2px solid #000000; width: 1110px; height: 180px;">
  <tr>開催場所<span style="color: red;">*必須</span></tr>
  <tr>
      <table>
        <div class="form-group">
          <p style="margin-bottom: 0px;">会場名</p>
          <input type="text" name='venue_name' class="form-control input-sm" id="kaisai_name"
              placeholder="会場名を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
              value="">
          <div class="validation"></div>
      </div>
      <div class="form-group">
        <p style="margin-bottom: 0px;">場所</p>
        <input type="text" name='plane' class="form-control input-sm" id="kaisai_name"
            placeholder="場所を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
            value="">
        <div class="validation"></div>
    </div>
      </table>

     <div class="button_wrapper">
      <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="position: 
      absolute;width: 200px; left: 400px;">保存</button>
      <div class="button_wrapper">
        <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="position: 
        absolute;width: 200px; left: 600px;">削除</button><br><br>
   </div>
   </div>
  </tr>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!--<h3>MeFamily</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      -->
      <li><a href="guide.php">利用ガイド</a></li>
      <li><a href="our-story.html">よくある質問</a></li>
      <li><a href="our-story.html">利用規約</a></li>
      <li><a href="our-story.html">プライバシーポリシー</a></li>
      <li><a href="our-story.html">お問い合わせ</a></li>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
      </div>
    </div>  
  </footer><!-- End Footer -->
  <footer1 id="footer1">
  <div class="credits1">
        &copy; Copyright <strong><span>MeFamily</span></strong>. All Rights Reserved
      </div>
      <div class="credits1">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>
  </footer1>
  
  
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  </body>
  
  </html>