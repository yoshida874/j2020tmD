
<?php
//ユーザープロフィール
$userId = "ユーザID";
$name = "名前";
$birth = "生年月日";
$interest = "趣味";
$numOfFollow = "フォロー";
$numOfFollower = "フォロワー";
$nameOfChild = "子供の名前";
$ageOfChild = "子供の年齢";
$genderOfChild = "子供の性別";
$introduce = "自己紹介文";

?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <img src="" alt="プロフィール画像">

  <div style="border: solid 3px #000; width:100 px; margin: 5em; border: solid 3px #000000;">

    <p>
      <?php
        echo "ユーザID : ".$userId."<br />";
        echo "名前 : ".$name."<br />";
        echo "生年月日 : ".$birth."<br />";
        echo "趣味 : ".$interest."<br />";
        echo "フォロー : ".$numOfFollow."<br />";
        echo "フォロワー : ".$numOfFollower."<br />";
        echo "子供の名前 : ".$nameOfChild."<br />";
        echo "子供の年齢 : ".$ageOfChild."<br />";
        echo "子供の性別 : ".$genderOfChild."<br />";
      ?>
      <a href="">プロフィールの変更</a>
    </p>

  </div>

  <div style="border: solid 3px #000; width:100 px; margin: 5em; border: solid 3px #000000;">

    <?php echo $introduce ?>

  </div>

<table border="1">

  <tr>
    <td> <a href="">ブックマーク</a> </td>
  </tr>
  <tr>
    <td> <a href="">予約内容の確認</a> </td>
  </tr>
  <tr>
    <td> <a href="">イベントの編集</a> </td>
  </tr>
  <tr>
    <td> <a href="">通知</a> </td>
  </tr>
  <tr>
    <td> <a href="">過去に参加したイベント</a> </td>
  </tr>
</table>

<p> sns連携 </p>

</body>
</html>
