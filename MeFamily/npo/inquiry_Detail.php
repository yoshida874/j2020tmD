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
            <a href="Profile_Create.php">
                <i class="fas fa-qrcode"></i>
                <span>プロフィール</span>
            </a>
            <a href="Admin_List.php" class="active">
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
            <h3>管理者詳細</h3>
            <!-- コンテンツ　-->
            
            <p></p>
            <form name="form1" method="post" action="">
                <table>
                    <tr>
                        <th>ID</th>
                        <td width="70%"><input type="text" name="user_id" size="50" value="" /></td>
                    </tr>
                    <tr>
                        <th>状態</th>
                        <td width="70%"><input type="text" name="user_name" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>ユーザー名</th>
                        <td width="70%"><input type="email" name="pw" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>ユーザーID</th>
                        <td width="70%"><input type="text" name="repw" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td width="70%"><input type="text" name="address" size="50" value="" /></td>
                        </td>
                    </tr>
                    <tr>
                        <th>受け取り日時</th>
                        <td width="70%"><input type="text" name="authority" size="50" value="" /></td>
                        </td>
                    </tr>
                </table>
                <button onclick="location.href='./Inquiry_List.php'">戻る</button>
      <button onmousedown="Reply()">返信</button>
      <script>
        function Reply() {
          document.getElementById("detail").hidden = true;
          document.getElementById("reply").hidden = false;
        }
      </script>
    </section>
    <section id="reply" hidden>
      <form name="form1" action="/~j2020tmD/sources/admin/Inquiry_Detail.php" method="post" >
        <h2>返信内容</h2>
        <p>
          <textarea name="" id="" cols="40" rows="10"> </textarea>
        </p>
        <input type="hidden"   name="inquiry_id" value="1">
        <input type="hidden"   name="user_name" value="yoshida">
        <input type="hidden"   name="user_id" value="yoshida_yoshida">
        <input type="hidden"   name="content" value="ログインが上手くできません">
        <input type="hidden"   name="target_date" value="2020-07-02 15:04:24">
        <input type="hidden" name="func" value="conf" />
        <input type="hidden" name="param" value="" />
        <button>戻る</button>
        <input type="button"  value="送る" onClick="javascript:set_func_form('set','')"/>
      </form>
            <p>&nbsp;</p>
        </div>
    </body>

</html>