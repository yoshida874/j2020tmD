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
    <h1>管理者情報</h1>
    <div align="center">
      <table border="1">
        <tr>
          <td>管理者</td>
          <td> 権限</td>
          <td>操作</td>
        </tr>

        <!-- sample1-->
        <tr>
          <td>
            たろう
          </td>
          <td>admin</td>
          <td>
            <button onclick="location.href='./admin_detail.php'">詳細</button>
            <button onclick="location.href='./admin_delete.php'">削除</button>
          </td>
        </tr>
        <!-- sample2-->
        <tr>
          <td>
            杏南
          </td>
          <td>読み取り</td>
          <td>
            <button onclick="location.href='./admin_detail.php'">詳細</button>
            <button onclick="location.href='./admin_delete.php'">削除</button>
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>