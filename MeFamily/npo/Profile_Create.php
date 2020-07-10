<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="css/admin_base.css">
        <link rel="stylesheet" href="css/user_list.css">
        <title>プロフィール</title> 
        


    </head>

    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>サイト名</header>
            <a href="Profile_Create.php" class="active">
                <i class="fas fa-qrcode"></i>
                <span>プロフィール</span>
            </a>
            <a href="Admin_List.php">
                <i class="fas fa-list-alt fa-2x"></i>
                <span>管理者</span>
            </a>
            <a href="">
                <i class="fas fa-bars"></i>
                <span>お問い合わせ</span>
            </a>
            <a href="admin_Event_List.php" >
                <i class="fas fa-list-alt fa-2x"></i>
                <span>イベント作成</span>
            </a>
            <a href="Event_List.php">
                <i class="far fa-list-alt fa-2x"></i>
                <span>イベント一覧</span>
            </a>
            <a href="">
                <i class="fas fa-sign-out-alt fa-2x"></i>
                <span>ログアウト</span>
            </a>
        </div>

        <h1>HOME</h1>
<h1 align="center">ようこそ○○さん</h1>
        
        <div id="main">
            <h3>プロフィール</h3>
            <!-- コンテンツ　-->
            
                <p></p>
                <table>
                    <tr>
                        <th>ID</th>
                        <td class="center">1</td>
                    </tr>
                    <tr>
                        <th>団体名</th>
                        <td class="center">郡山総合保育団体</td>
                        </td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td class="center">森</td>
                        </td>
                    </tr>
                    <tr>
                    <th>メールアドレス</th>
                        <td class="center">mori@gmail.com</td>
                        </td>
                    </tr>
                    <tr>
                        <th>市町村</th>
                        <td class="center">郡山市</td>
                        </td>
                    </tr>
                    <tr>
                        <th>事務所の所在地</th>
                        <td class="center">郡山市</td>
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