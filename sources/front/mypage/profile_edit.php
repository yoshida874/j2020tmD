﻿<?php
//プロフィール編集画面

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div align="center">
        <table border="1">
            <tr>
                <th>
                    ユーザー名
                    <p>（ニックネーム可）</p>
                </th>
                <td><input type="text" value="渡辺花子"></td>
            </tr>
            <tr>
                <th>ID</th>
                <td><input type="text" value="@Watanabe_watanabe"></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><input type="text" value="watanabe@gmail.com"></td>
            </tr>
            <tr>
                <th>プロフィール画像</th>
                <td><img src="hoge">
                    <input type="file" name="img_upload" accept="image/jpeg,image/png,image/gif">
                </td>
            </tr>
            <tr>
                <th>趣味</th>
                <td><input type="text" value="料理"></td>
            </tr>
            <tr>
                <th>お子様の名前
                    <p>ニックネーム可</p>
                </th>
                <td><input type="text" value="渡辺太郎"></td>
            </tr>
            <tr>
                <th>自己紹介</th>
                <td><textarea name="" id="" cols="50" rows="10"></textarea></td>
            </tr>
        </table>

        <p>
            <input type="button" value="+お子様の追加" onclick="history.back()">
            <input type="button" value="登録" onclick="history.back()">
        </p>
    </div>
</body>

</html>