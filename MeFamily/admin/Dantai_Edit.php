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
            <a href="Dantai_List.php" class="active">
                <i class="far fa-list-alt fa-2x"></i>
                <span>団体一覧</span>
            </a>
            <a href="inquiry_List.php">
                <i class="far fa-question-circle"></i>
                <span>お問い合わせ</span>
            </a>
            <a href="Blacklist_List.php">
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
            <h3>団体詳細</h3>
            <!-- コンテンツ　-->
            
            <p></p>
                <table>
                    <tr>
                        <th>ID</th>
                        <td class="center" name="NPO_id" readonly></td>
                    </tr>
                    <tr>
                        <th>グループ名</th>
                        <td width="70%"><input type="text" name="group_name" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td width="70%"><input type="text" name="NPO_representative" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td width="70%"><input type="email" name="NPO_mailaddress" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>都道府県</th>
                        <td width="70%"><input type="text" name="NPO_prefecture" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>市町村</th>
                        <td width="70%"><input type="text" name="NPO_city" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>字丁目</th>
                        <td width="70%"><input type="text" name="NPO_aza" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td width="70%"><input type="text" name="NPO_postcpde" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>目的</th>
                        <td width="70%"><textarea name="NPO_postcode" cols="40" rows="8"></textarea></td>
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