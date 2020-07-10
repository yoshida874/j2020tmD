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
            <a href="Event_List.php" class="active">
                <i class="fas fa-list-alt fa-2x"></i>
                <span>イベント一覧</span>
            </a>
            <a href="Dantai_List.php">
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
            <a href="Login.php">
                <i class="fas fa-sign-out-alt fa-2x"></i>
                <span>ログアウト</span>
            </a>
        </div>

        <h1>HOME</h1>
<h1 align="center">ようこそ○○さん</h1>
        
        <div id="main">
            <h3>イベント詳細</h3>
            <!-- コンテンツ　-->
            
            <p></p>
                <table>
                    <tr>
                        <th>イベントID</th>
                        <td class="center" name="event_id" readonly></td>
                    </tr>
                    <tr>
                        <th>イベント名</th>
                        <td width="70%"><input type="text" name="event_name" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>NPOID</th>
                        <td width="70%"><input type="text" name="NPO_id" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>最小対象年齢</th>
                        <td width="70%"><input type="email" name="start_age" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>最大対象年齢</th>
                        <td width="70%"><input type="text" name="end_age" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>イベント開始日</th>
                        <td width="70%"><input type="text" name="start_event_date" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>イベント開始時間</th>
                        <td width="70%"><input type="text" name="start_event_time" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>イベント終了日</th>
                        <td width="70%"><input type="text" name="end_event_date" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>イベント終了時間</th>
                        <td width="70%"><input type="text" name="end_event_time" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>募集開始日</th>
                        <td width="70%"><input type="text" name="start_recruiting_date" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>募集開始時間</th>
                        <td width="70%"><input type="text" name="start_recruiting_time" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>募集終了日</th>
                        <td width="70%"><input type="text" name="end_recruiting_date" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>募集終了時間</th>
                        <td width="70%"><input type="email" name="end_recruiting_time" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>代表者名</th>
                        <td width="70%"><input type="text" name="representative" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>会場名</th>
                        <td width="70%"><input type="text" name="venue_name" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>会場所在都道府県</th>
                        <td width="70%"><input type="text" name="venue_prefecture" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>会場所在市町村</th>
                        <td width="70%"><input type="text" name="venue_city" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>会場所在字丁目</th>
                        <td width="70%"><input type="text" name="venue_aza" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td width="70%"><input type="text" name="event_postcode" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>開催費用</th>
                        <td width="70%"><input type="text" name="cost" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>ハッシュタグ</th>
                        <td width="70%"><input type="text" name="hash_tag" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>イベント内容</th>
                        <td width="70%"><textarea name="content" cols="40" rows="8"></textarea></td>
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