﻿<?php
//問い合わせ画面

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>お問い合わせ</h1>
    <P>お問い合わせの種類・内容・メールアドレスをご入力の上、「送信」ボタンをクリックして下さい</P>
    <p>お問い合わせの種類<br>
    <select name=”inquiry”>
        <option value="">選択してください</option>
        <option value=”login”>ログインできない</option>
        <option value=”signup”>会員登録について</option>
    </select>
    </p>
    <p>お問い合わせ内容<br>
        <textarea name="Content" cols="100" rows="10"></textarea>
    </p>
    <p>
        メールアドレス<br>
        <input type="text" size="50">
    </p>
    <div align="center">
        <input type="button" value="送信">
    </div>
</body>
</html>