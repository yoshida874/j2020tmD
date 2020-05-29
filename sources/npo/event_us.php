<?php


?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div>
    <h1>イベント一覧</h1>
    <div align="center">
      <table border="1">
        <tr>
          <td>イベント名</td>
          <td>日付</td>
          <td>操作</td>
        </tr>

        <!-- sample1-->
        <tr>
          <td>
            運動会
          </td>
          <td>2020-07-03</td>
          <td>
            <button onclick="location.href='./event_detail.php'">詳細</button>
            <button onclick="location.href='./event_delete.php'">削除</button>
          </td>
        </tr>
        <!-- sample2-->
        <tr>
          <td>
            運動会
          </td>
          <td>2020-11-10</td>
          <td>
            <button onclick="location.href='./event_detail.php'">詳細</button>
            <button onclick="location.href='./event_delete.php'">削除</button>
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>