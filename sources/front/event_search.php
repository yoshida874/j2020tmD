﻿<?php
//イベント検索画面

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form>
            <div class="row">
                <div class="col">
                    <label>キーワード</label>
                    <input type="text">
                </div>

                <div class="col">
                    <label>開催日</label>
                    <select name="pref">
                    <option value="start">1/16</option>
                    </select>
                    ~
                    <select name="pref">
                        <option value="End">1/17</option>
                    </select>
                </div>
                
                <div class="col">
                    <label>対象年齢</label>
                    <input type="text"> ~ <input type="text">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>開催場所</label>
                        <select name="pref">
                        <option value="place">郡山市</option>
                        </select>
                </div>
                <div class="col">
                    <label>関連タグ</label>
                    <input type="text">
                </div>
                <input type="button" value="検索">
            </div>
        </form>
    </div>

    <div class="container">
        <hr>
        検索結果(334件)
        <hr>
        <div class="row">
            <div class="col-md-1">
                1/17<br>
                (日)
            </div>
            <div class="col-md-1">
                <p>
                    9:00~<br>
                    17:00
                </p>
                <p>
                    対象年齢<br>
                    1~6歳
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://pbs.twimg.com/profile_images/747300073134915586/bGWrw26Y.jpg">
            </div>
            <div class="col-md-4">
                <p>
                    開催団体 wiz保育部<br>
                    <b>水族館で生物と触れ合おう!</b><br>
                </p>
                <p>
                    郡山シーパラダイス 郡山神保町2丁目32
                </p>
                9/27 人
            </div>
        </div>
    </div>
</body>

</html>
