<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="css/admin_base.css">
        <link rel="stylesheet" href="css/user_list.css">
        <title>ユーザ一覧</title> 
        


    </head>

    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>サイト名</header>
            <a href="Admin_List.php" >
                <i class="fas fa-qrcode"></i>
                <span>管理者情報</span>
            </a>
            <a href="User_List.php">
                <i class="fas fa-list-alt fa-2x"></i>
                <span>ユーザー一覧</span>
            </a>
            <a href="">
                <i class="fas fa-bars"></i>
                <span>イベント作成</span>
            </a>
            <a href="Event_List.php" >
                <i class="fas fa-list-alt fa-2x"></i>
                <span>イベント一覧</span>
            </a>
            <a href="Dantai_List.php">
                <i class="far fa-list-alt fa-2x"></i>
                <span>団体一覧</span>
            </a>
            <a href="inquiry_List.php" class="active">
                <i class="far fa-question-circle"></i>
                <span>お問い合わせ</span>
            </a>
            <a href="Blacklist_List.php">
                <i class="fas fa-sliders-h"></i>
                <span>ブラックリスト</span>
            </a>
            <a href="Login.php">>
                <i class="fas fa-sign-out-alt fa-2x"></i>
                <span>ログアウト</span>
            </a>
        </div>

        <h1>HOME</h1>
<h1 align="center">ようこそ○○さん</h1>
        
        <div id="main">
            <h3>お問い合わせ詳細</h3>
            <!-- コンテンツ　-->
            
            <p></p>
                <table>
                    <tr>
                        <th>ID</th>
                        <td class="center" name="inquiry_id" readonly></td>
                    </tr>
                    <tr>
                        <th>状態</th>
                        <td width="70%"><input type="text" name="status" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>ユーザー名</th>
                        <td width="70%"><input type="text" name="user_name" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>ユーザーID</th>
                        <td width="70%"><input type="email" name="user_id" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td width="70%"><input type="text" name="contact" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>受信日時</th>
                        <td width="70%"><input type="text" name="target_date" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>趣味</th>
                        <td width="70%"><input type="text" name="userInterest" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td width="70%"><input type="text" name="yourMailaddress" size="50" value="" /></td>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="func" value="" />
                <input type="hidden" name="param" value="" />
                <p class="center"><input type="button"  value="確認" onClick="javascript:set_func_form('conf','')"/></p>
            </form>
            <p>&nbsp;</p>
        </div>
    </body>

</html>