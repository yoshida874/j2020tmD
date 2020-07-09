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
  <!--<link href="assets/css/style.css" rel="stylesheet">-->

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
          <li class="active"><a href="Userprofile_Page.php">サイト名</a></li>
          <li><a href="event_search.php">新着イベント</a></li>
          <li><a href="">イベント編集</a></li>
          <li><a href="event_create.php">イベント作成</a></li>
          <li class="login"><a href="Login_Page.php"><i class="fas fa-sign-in-alt">ログイン</i></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<!-- ======= 入力欄 ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <br><h2>お問い合わせ</h2>
      </div>

    <div class="">
        <form name="form1" action="" method="post" enctype="multipart/form-data"
            class="contactform">
              <div class="form-group">
                  <p style="margin-bottom: 0px;">名前<span style="color: red;">*必須</span></p>
                  <input type="text" name='event_name' class="form-control input-sm" id="kaisai_pass"
                      placeholder="名前を入力" value="">
                  <div class="validation"></div>
              </div>
              <div class="form-group">
                <p style="margin-bottom: 0px;">メールアドレス<span style="color: red;">*必須</span></p>
                <input type="email" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
                    placeholder="メールアドレスを入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
                    value="">
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <p style="margin-bottom: 0px;">メールアドレス(確認)<span style="color: red;">*必須</span></p>
                <input type="email" name='kaisai_name' class="form-control input-sm" id="kaisai_name"
                    placeholder="メールアドレスを入力" size="20" data-rule="minlen:1" data-msg="値を入力してください"
                    value="">
                <div class="validation"></div>
              </div>
          <div class="form-">
            <p style="margin-bottom: 0px;">お問い合わせ内容<span style="color: red;">*必須</span></p>
          <textarea name='event_description' class="form-control input-sm" id="kaisai_name" 
          placeholder="お問い合わせ内容を入力" size="20" data-rule="minlen:1" rows="10" cols="127" data-msg="値を入力してください"
          value=""></textarea>
        </div>
        <br><div class="button_wrapper">
            <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="text-align:center">送信</button>
        </form>
    </div>
    </div>
</section>
</div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!--<h3>MeFamily</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      -->
      li><a href="guide.php">利用ガイド</a></li>
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