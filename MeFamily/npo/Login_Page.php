<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="css/admin_base.css">
        <link rel="stylesheet" href="css/user_list.css">
        <title>ログイン</title> 
        
        <script type="text/javascript">
            function set_func_form( fn, pm ) {
                document.form1.target = "_self";
                document.form1.func.value = fn;
                document.form1.param.value = pm;
                document.form1.submit();
            }

            function del_func_form( pm, mess ) {
                var message = "本当に\r\n";
                message += mess;
                message += "\r\nを削除しますか？";
                if ( confirm( message ) ) {
                    document.form1.target = "_self";
                    document.form1.func.value = 'del';
                    document.form1.param.value = pm;
                    document.form1.submit();
                }
            }
        </script>
        


    </head>

    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
        <a href="Home_Page.php">
        <header>サイト名</header>
            <a href="Profile_Create.php">
            <i class="fas fa-list-alt fa-2x"></i>
                <span>プロフィール</span>
        </a>
            <a href="Admin_List.php">
                <i class="fas fa-list-alt fa-2x"></i>
                <span>管理者</span>
        </a>
        <a href="event_create.php">
                <i class="fas fa-bars"></i>
                <span>イベント作成</span>
            </a>
            <a href="Event_List.php" >
                <i class="fas fa-list-alt fa-2x"></i>
                <span>イベント一覧</span>
            </a>
            <a href="inquiry_List.php">
                <i class="far fa-question-circle"></i>
                <span>お問い合わせ</span>
            </a>
            <a href="Login_Page.php">
                <i class="fas fa-sign-out-alt fa-2x"></i>
                <span>ログアウト</span>
            </a>
        </div>


<body>


  </header><!-- End Header -->

  <div id="main">
            <h3>ログイン
            </h3>
            <p>ログインできます</p>
            <!-- コンテンツ　-->
            
            <p></p>
                <table>
                    <tr>
                        <th>ID</th>
                        <td width="70%"><input type="text" name="confirmPassword" 
                        placeholder="会員IDを入力"　　
                        size="50" style="width:400px;"  data-rule="minlen:1" data-msg="IDを入力してください"
                         value="" /></td>
                    </tr>
                    <tr>
                        <th>PW</th>
                        <td width="70%"><input type="text" name="confirmPassword" 
                        placeholder="パスワードを入力"　
                        size="50" style="width:400px;"  data-rule="minlen:1" data-msg="PWを入力してください"
                         value="" /></td>
          </tr>
    </table>
    <br><br>
                <div class="button_wrapper"　align="center">
          <button class="mx-auto btn btn-outline-primary rounded-pill d-block" 　align="center" >ログイン</button>
        </div>
                <br>
                <a class="ps-in" href="Signup_Page.php">新規登録</a>　<a class="ps-in" href="">パスワードを忘れた場合</a>
            </form>
        </div>
</body>

</html>