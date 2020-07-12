<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="css/admin_base.css">
        <link rel="stylesheet" href="css/user_list.css">
        <title>お問い合わせ</title> 
        
        <script type="text/javascript">
        
        function set_func_form(fn,pm){
    document.form1.target = "_self";
    document.form1.func.value = fn;
    document.form1.param.value = pm;
    document.form1.submit();
}

function del_func_form(pm,mess){
    var message = "本当に\r\n";
    message += mess;
    message += "\r\nを削除しますか？";
    if(confirm(message)){
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
<h1 align="center"></h1>
        
        <div id="main">
            <h3>お問い合わせリスト</h3>
            <!-- コンテンツ　-->
            
                <p></p>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>ユーザー名</th>
                        <th>状態</th>
                        <th colspan="2">操作</th>
                    </tr>
                    <tr>
                        <td class="center">1</td>
                        <td class="center">yoshida</td>
                        <td class="center">返信済み</td>
                        <td class="center"><a href="inquiry_Detail.php">詳細</a>
                        <td width="65%" class="center"><input type="button" value="削除" onClick="javascript:del_func_form(1,'【yoshida】')" />
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