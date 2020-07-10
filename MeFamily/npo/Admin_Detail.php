<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="css/admin_base.css">
        <link rel="stylesheet" href="css/user_list.css">
        <title>管理者情報編集</title> 
        



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
<h1 align="center"></h1>
        
        <div id="main">
            <h3>管理者編集</h3>
            <!-- コンテンツ　-->
            
            <p></p>
            <form name="form1" method="post" action="">
                <table>
                    <tr>
                        <th>ユーザーID</th>
                        <td width="70%"><input type="text" name="user_id" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>ユーザー名</th>
                        <td width="70%"><input type="text" name="user_name" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>PW</th>
                        <td width="70%"><input type="email" name="pw" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>PWの再確認</th>
                        <td width="70%"><input type="text" name="repw" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td width="70%"><input type="text" name="address" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>権限</th>
                        <td width="70%"><input type="text" name="authority" size="50" value="" /></td>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="NPO_id" value= />
                <input type="hidden" name="func" value="" />
                <input type="hidden" name="param" value="" />
                <input type="button" name="btn_confirm" onClick="javascript:set_func_form('confirm','')" style="position: absolute; left: 50%; top: 100%" value="確認">
            </form>
            <p>&nbsp;</p>
        </div>
    </body>

</html>