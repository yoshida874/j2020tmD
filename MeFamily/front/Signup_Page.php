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
          <li class="active"><a href="Home_Page.php">マイページ</a></li>
          <li><a href="Userprofile_Page.php">新着イベント</a></li>
          <li><a href="event_search.php">イベント編集</a></li>
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
    <br><h2>新規会員登録</h2>
    <p>ここでは会員登録をすることができます。<br>
    各項目を入力して登録してください。<br>
    お子様が複数人の場合は、追加ボタンを押して新たに情報を入力してください</p>
  </div>

  <br><div style="border: 2px solid #000000; width: 1258px; height: 770px;">
    <tr>開催場所<span style="color: red;">*必須</span></tr>
    <tr>
        <table>
          <div class="form-group">
            <p style="margin-bottom: 0px;">ユーザー名(ニックネーム可)</p>
            <input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
                placeholder="開催団体を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
                value="">
            <div class="validation"></div>
        </div>
        <div class="form-group">
          <p style="margin-bottom: 0px;">ID</p>
          <input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
              placeholder="IDを入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
              value="">
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <p style="margin-bottom: 0px;">メールアドレス</p>
          <input type="email" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
              placeholder="メールアドレスを入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
              value="">
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <p style="margin-bottom: 0px;">性別を入力してください</p>
                                      <div class="form-check-inline">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name='yuza_seibetu' id="exampleRadios1"
                      value="0" checked>
                  <label class="form-check-label" style="padding: 3px;" for="exampleRadios1">
                      男
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name='yuza_seibetu' id="exampleRadios2"
                      value="1">
                  <label class="form-check-label" style="padding: 3px;" for="exampleRadios2">
                      女
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name='yuza_seibetu' id="exampleRadios3"
                      value="2">
                  <label class="form-check-label" style="padding: 3px;" for="exampleRadios3">
                      その他
                  </label>
              </div>
          </div>           
      </div>
      <div class="form-group">       
        <label>生年月日</label>
        <div class="myfoam">
            <select name="month">
            <option value="0" >選択してください</option>
                                                    <option value="1984" >1984</option>
                                                    <option value="1985" >1985</option>
                                                    <option value="1986" >1986</option>
                                                    <option value="1987" >1987</option>
                                                    <option value="1988" >1988</option>
                                                    <option value="1989" >1989</option>
                                                    <option value="1990" >1990</option>
                                                    <option value="1991" >1991</option>
                                                    <option value="1992" >1992</option>
                                                    <option value="1993" >1993</option>
                                                    <option value="1994" >1994</option>
                                                    <option value="1995" >1995</option>
                                                    <option value="1996" >1996</option>
                                                    <option value="1997" >1997</option>
                                                    <option value="1998" >1998</option>
                                                    <option value="1999" >1999</option>
                                                    <option value="2000" >2000</option>
                                                    <option value="2001" >2001</option>
                                                    <option value="2002" >2002</option>
                                                                        <option value="2003" >2003</option>
                                                                        <option value="2004" >2004</option>
                                                                        <option value="2005" >2005</option>
                                                                        <option value="2006" >2006</option>
                                                                        <option value="2007" >2007</option>
                                                                        <option value="2008" >2008</option>
                                                                        <option value="2009" >2009</option>
                                                                        <option value="2010" >2010</option>
                                                                        <option value="2011" >2011</option>
                                                                        <option value="2012" >2012</option>
                                                                        <option value="2013" >2013</option>
                                                                        <option value="2014" >2014</option>
                                                                        <option value="2015" >2015</option>
                                                                        <option value="2016" >2016</option>
                                                                        <option value="2017" >2017</option>
                                                                        <option value="2018" >2018</option>
                                                                        <option value="2019" >2019</option>
                                                                        <option value="2020" >2020</option>
            </select>年
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
          <p style="margin-bottom: 0px;">パスワード</p>
          <input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
              placeholder="パスワードを入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
              value="">
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <p style="margin-bottom: 0px;">パスワード確認用</p>
          <input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
              placeholder="パスワードを再度入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
              value="">
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <p style="margin-bottom: 0px;">お子様の名前(ニックネーム可)</p>
          <input type="text" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
              placeholder="お子様の名前を入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
              value="">
          <div class="validation"></div>
        </div>
        <div class="form-group">       
          <label>お子様の誕生日</label>
          <div class="myfoam">
              <select name="month">
              <option value="0" >選択してください</option>
                                                      <option value="2014" >2014</option>
                                                                          <option value="2015" >2015</option>
                                                                          <option value="2016" >2016</option>
                                                                          <option value="2017" >2017</option>
                                                                          <option value="2018" >2018</option>
                                                                          <option value="2019" >2019</option>
                                                                          <option value="2020" >2020</option>
              </select>年
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
          <p style="margin-bottom: 0px;">お子様の性別を入力してください</p>
                                      <div class="form-check-inline">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name='yuza_seibetu' id="exampleRadios1"
                      value="0" checked>
                  <label class="form-check-label" style="padding: 3px;" for="exampleRadios1">
                      男
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name='yuza_seibetu' id="exampleRadios2"
                      value="1">
                  <label class="form-check-label" style="padding: 3px;" for="exampleRadios2">
                      女
                  </label>
              </div>
          </div>           
      </div>
        </table>
  
        <div class="button_wrapper">
          <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="position: 
          absolute;width: 200px; left: 200px;">お子様の追加</button>
        <div class="button_wrapper">
          <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="position: 
          absolute;width: 200px; left: 530px;">登録</button>
        </div>
        </div>
        
<!-- ======= Footer ======= -->
  <br><br><footer id="footer">
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
      <div class="copyright">
        &copy; Copyright <strong><span>MeFamily</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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