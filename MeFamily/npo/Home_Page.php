<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="css/admin_base.css">
        <link rel="stylesheet" href="css/user_list.css">
        <title>ホーム画面</title> 
        
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

        

        <h1>HOME</h1>
        <h1 align="center">ようこそ○○さん</h1>
        
        <div id="main">
            <!-- コンテンツ　-->
            
                <p></p>
                <table>
                    <tr>
                        <td class="center">
                            <a href="Profile_Create.php">プロフィール</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">
                            <a href="Admin_List.php">管理者</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">
                            <a href="">イベント作成</a>
                        </td>
                    </>
                    <tr>
                        <td class="center">
                            <a href="Event_List.php">イベント一覧</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">
                            <a href="inquiry_List.php">お問い合わせ</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">
                            <a href="">ログアウト</a>
                        </td>
                    </tr>
                                    </table>
                <input type="hidden" name="func" value="" />
                <input type="hidden" name="param" value="" />
            </form>
            <p>&nbsp;</p>
        </div>
    </body>

</html>