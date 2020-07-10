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
            <a href="admin_Admin_List.php">
                <i class="fas fa-qrcode"></i>
                <span>管理者情報</span>
            </a>
            <a href="admin_User_List.php" class="active">
                <i class="fas fa-list-alt fa-2x"></i>
                <span>ユーザー一覧</span>
            </a>
            <a href="">
                <i class="fas fa-bars"></i>
                <span>イベント作成</span>
            </a>
            <a href="admin_Event_List.php">
                <i class="fas fa-list-alt fa-2x"></i>
                <span>イベント一覧</span>
            </a>
            <a href="admin_Dantai_List.php">
                <i class="far fa-list-alt fa-2x"></i>
                <span>団体一覧</span>
            </a>
            <a href="admin_inquiry_List.php">
                <i class="far fa-question-circle"></i>
                <span>お問い合わせ</span>
            </a>
            <a href="admin_Blacklist_List.php">
                <i class="fas fa-sliders-h"></i>
                <span>ブラックリスト</span>
            </a>
            <a href="">
                <i class="fas fa-sign-out-alt fa-2x"></i>
                <span>ログアウト</span>
            </a>
        </div>

        <h1>HOME</h1>
<h1 align="center">ようこそ○○さん</h1>
        
        <div id="main">
            <h3>ユーザ情報</h3>
            <!-- コンテンツ　-->
            
                <p></p>
                <table>
                    <tr>
                        <th>ユーザー名</th>
                        <th colspan="2">操作</th>
                    </tr>
                    <tr>
                        <td width="10%" class="center">ごろう</td>
                        <td width="65%" class="center"><a href="">編集</a>
                        <td width="65%" class="center"><a href="">削除</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%" class="center">ごろう</td>
                        <td width="65%" class="center"><a href="">編集</a>
                        <td width="65%" class="center"><a href="">削除</a>
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