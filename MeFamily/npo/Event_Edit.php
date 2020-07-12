<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="css/admin_base.css">
        <link rel="stylesheet" href="css/user_list.css">
        <title>イベント情報編集</title> 
        


    </head>

    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>サイト名</header>
            <a href="Profile_Create.php">
                <i class="fas fa-qrcode"></i>
                <span>プロフィール</span>
            <a href="Admin_List.php">
                <i class="fas fa-list-alt fa-2x"></i>
                <span>管理者</span>
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
            <a href="Login_Page.php">>
                <i class="fas fa-sign-out-alt fa-2x"></i>
                <span>ログアウト</span>
            </a>
        </div>

        <h1>HOME</h1>
<h1 align="center"></h1>
        
        <div id="main">
            <h3>イベント編集</h3>
            <!-- コンテンツ　-->
            
            <p></p>
                <table>
                    <tr>
                        <th>イベント名</th>
                        <td class="center" name="yourId" readonly><input type="text" name="userId" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>開催団体</th>
                        <td width="70%"><input type="text" name="userId" size="50" value="" /></td>
                    </tr>
                    <tr>
                   
              <th>画像</th>
              <td><input type="file" name='image' class="form-control input-sm" id="kaisai_name"
                  value="">
                        </td>
                    </tr>
                    <tr>
                        <th>ハッシュタグ</th>
                        <td width="70%"><input type="email" name="yourPassword" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>参加費用</th>
                        <td width="70%"><input type="text" name="confirmPassword" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>イベント説明文</th>
                        <td><textarea name='event_description' class="form-control input-sm" id="kaisai_name" 
    placeholder="説明文を入力" size="20" data-rule="minlen:1" rows="10" cols="50" data-msg="値を入力してください"
    value=""></textarea>
                        </td>
                    </tr>
                    <table>
                                <!-- 開催日程-->
        <tr>開催日程・募集期間<span style="color: red;">*必須</span></tr>
      <tr>
          <th>開始日時</th>
          <td>
            <table>
              <tr>
              <td>日</td>
              <td><input type="text" name='start_day' class="form-control input-sm" id="kaisai_name"
                placeholder="日にちを入力" size="50" style="width:400px;"  data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
              </tr>
              <tr>
              <td>時間</td>
              <td><input type="text" name='start_time' class="form-control input-sm" id="kaisai_name"
                placeholder="時間を入力" size="50" style="width:400px;" data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
              </tr>
          </table>
          </td>
      </tr>
      <tr>
          <th>終了日時</th>
          <td>
            <table>
              <tr>
              <td>日</td>
              <td><input type="text" name='start_day' class="form-control input-sm" id="kaisai_name"
                placeholder="日にちを入力" size="50" style="width:400px;"  data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>

              <tr>
              <td>時間</td>
              <td><input type="text" name='start_time' class="form-control input-sm" id="kaisai_name"
                placeholder="時間を入力" size="50" style="width:400px;" data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
              </tr>
          </table>
          </td>
          </tr>
  <!-- 募集開始〜終了-->
  <tr>
    <th>
    募集開始
    〜終了日
    </th>
    <td>
    <table>
        <tr>
        <td>日</td>
        <td><input type="text" name='start_day' class="form-control input-sm" id="kaisai_name"
                placeholder="日にちを入力" size="50" style="width:400px;"  data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
        <tr>
        <td>時間</td>
        <td><input type="text" name='start_time' class="form-control input-sm" id="kaisai_name"
                placeholder="時間を入力" size="50" style="width:400px;" data-rule="minlen:1" data-msg="値を入力してください"
                value=""></td>
              </tr>
    
    </table>
    
</td>
  </table>
  <br>
  <tr>開催場所<span style="color: red;">*必須</span></tr>
  <tr>
      <table>
        <div class="form-group">
          <th>会場名</th>
          <td><input type="text" name='venue_name' class="form-control input-sm" id="kaisai_name"
              placeholder="会場名を入力" size="50" style = "width:400px;" data-rule="minlen:1" data-msg="値を入力してください"
              value=""></td>
</tr>
      <div class="form-group">
        <th>場所</th>
        <td><input type="text" name='plane' class="form-control input-sm" id="kaisai_name"
            placeholder="場所を入力" size="50" style = "width:400px;" data-rule="minlen:1" data-msg="値を入力してください"
            value=""></td>
</tr>
      </table>

<br>

     <div class="button_wrapper">
      <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="position: 
      absolute;width: 200px; left: 400px;">保存</button>
      <div class="button_wrapper">
        <button class="mx-auto btn btn-outline-primary rounded-pill d-block"  style="position: 
        absolute;width: 200px; left: 600px;">削除</button><br><br>
   </div>
   </div>
  </tr>
            
        </div>
    </body>

</html>