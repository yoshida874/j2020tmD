<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MeFamily Bootstrap Template - Index</title>
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

     <!--ナビゲーションクラス-->
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

  <!-- ======= My & Family Section ======= -->
  <section id="about" class="">
    <div class="">
  <div class="section-title">
    <br><h2>イベントを探す</h2>
    <p>ここではイベントの検索ができます<br></p>
  </div>

  <br><div style="border: 2px solid #000000; width: 1258px; height: 470px;">
    <tr>検索条件</tr>
    <tr>
        <table>
          <div class="form-group">
            <p style="margin-bottom: 0px;">キーワード</p>
            <input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
                placeholder="キーワードを入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
                value="">
            <div class="validation"></div>
        </div>
        <div class="form-group">       
          <label>開催日</label>
          <div class="myfoam">
              <select name="month">
              <option value="0" >選択してください</option>
                                                      <option value="1" >1</option>
                                                                          <option value="2" >2</option>
                                                                          <option value="3" >3</option>
                                                                          <option value="4" >4</option>
                                                                          <option value="5" >5</option>
                                                                          <option value="6" >6</option>
                                                                          <option value="7" >7</option>
                                                                          <option value="8" >8</option>
                                                                          <option value="9" >9</option>
                                                                          <option value="10" >10</option>
                                                                          <option value="11" >11</option>
                                                                          <option value="12" >12</option>
              </select>月
              <select name="day">
                <option value="0">選択してください。</option>
                <option value="1" >1</option>
                                                                          <option value="2" >2</option>
                                                                          <option value="3" >3</option>
                                                                          <option value="4" >4</option>
                                                                          <option value="5" >5</option>
                                                                          <option value="6" >6</option>
                                                                          <option value="7" >7</option>
                                                                          <option value="8" >8</option>
                                                                          <option value="9" >9</option>
                                                                          <option value="10" >10</option>
                                                                          <option value="11" >11</option>
                                                                          <option value="12" >12</option>
                                                                          <option value="13" >13</option>
                                                                          <option value="14" >14</option>
                                                                          <option value="15" >15</option>
                                                                          <option value="16" >16</option>
                                                                          <option value="17" >17</option>
                                                                          <option value="18" >18</option>
                                                                          <option value="19" >19</option>
                                                                          <option value="20" >20</option>
                                                                          <option value="21" >21</option>
                                                                          <option value="22" >22</option>
                                                                          <option value="23" >24</option>
                                                                          <option value="25" >25</option>
                                                                          <option value="26" >1</option>
                                                                          <option value="27" >27</option>
                                                                          <option value="28" >28</option>
                                                                          <option value="29" >29</option>
                                                                          <option value="30" >30</option>
                                                                          <option value="31" >31</option>
            </select>日
          </div>
        </div>
        <div class="form-group">       
          <label>対象年齢</label>
          <div class="myfoam">
              <select name="month">
              <option value="0" >選択してください</option>
                                                                          <option value="0" >0</option>
                                                                          <option value="1" >1</option>
                                                                          <option value="2" >2</option>
                                                                          <option value="3" >3</option>
                                                                          <option value="4" >4</option>
                                                                          <option value="5" >5</option>
                                                                          <option value="6" >6</option>
              </select>歳
              ～
              <select name="day">
                <option value="0">選択してください。</option>
                                                                          <option value="0" >0</option>
                                                                          <option value="1" >1</option>
                                                                          <option value="2" >2</option>
                                                                          <option value="3" >3</option>
                                                                          <option value="4" >4</option>
                                                                          <option value="5" >5</option>
                                                                          <option value="6" >6</option>
            </select>歳
          </div>
        </div>
        <div class="form-group">       
          <label>開催場所</label>
          <div class="myfoam">
              <select name="sity">
              <option value="0" >選択してください</option>
                                                                          <option value="福島市" >福島市</option>
                                                                          <option value="郡山市" >郡山市</option>
              </select>
          </div>
        </div>
        <div class="form-group">
          <p style="margin-bottom: 0px;">関連タグ</p>
          <input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
              placeholder="関連タグを入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
              value="">
          <div class="validation"></div>
        </div>
        </table>

        <div class="form-group">       
          <label>開催日</label>
          <div class="myfoam">
              <select name="month">
              <option value="0" >選択してください</option>
                                                      <option value="1" >1</option>
                                                                          <option value="2" >2</option>
                                                                          <option value="3" >3</option>
                                                                          <option value="4" >4</option>
                                                                          <option value="5" >5</option>
                                                                          <option value="6" >6</option>
                                                                          <option value="7" >7</option>
                                                                          <option value="8" >8</option>
                                                                          <option value="9" >9</option>
                                                                          <option value="10" >10</option>
                                                                          <option value="11" >11</option>
                                                                          <option value="12" >12</option>
              </select>月
              <select name="day">
                <option value="0">選択してください。</option>
                <option value="1" >1</option>
                                                                          <option value="2" >2</option>
                                                                          <option value="3" >3</option>
                                                                          <option value="4" >4</option>
                                                                          <option value="5" >5</option>
                                                                          <option value="6" >6</option>
                                                                          <option value="7" >7</option>
                                                                          <option value="8" >8</option>
                                                                          <option value="9" >9</option>
                                                                          <option value="10" >10</option>
                                                                          <option value="11" >11</option>
                                                                          <option value="12" >12</option>
                                                                          <option value="13" >13</option>
                                                                          <option value="14" >14</option>
                                                                          <option value="15" >15</option>
                                                                          <option value="16" >16</option>
                                                                          <option value="17" >17</option>
                                                                          <option value="18" >18</option>
                                                                          <option value="19" >19</option>
                                                                          <option value="20" >20</option>
                                                                          <option value="21" >21</option>
                                                                          <option value="22" >22</option>
                                                                          <option value="23" >24</option>
                                                                          <option value="25" >25</option>
                                                                          <option value="26" >1</option>
                                                                          <option value="27" >27</option>
                                                                          <option value="28" >28</option>
                                                                          <option value="29" >29</option>
                                                                          <option value="30" >30</option>
                                                                          <option value="31" >31</option>
            </select>日
          </div>
        </div>

        <div class="button_wrapper">
          <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="position: 
          absolute;width: 200px; left: 400px;">検索</button>
        </div>

<br>

 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="container">
      <!--<h3>MeFamily</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      -->
      <li><a href="guide.php">利用ガイド</a></li>
      <li><a href="question.php">よくある質問</a></li>
      <li><a href="terms_of_service.php">利用規約</a></li>
      <li><a href="privacy.php">プライバシーポリシー</a></li>
      <li><a href="contact_us.php">お問い合わせ</a></li>
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