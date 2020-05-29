<?php

// 変数の初期化
$page_flag = 0;

if( !empty($_POST['btn_confirm']) ) {

	$page_flag = 1;

} elseif( !empty($_POST['btn_submit']) ) {

	$page_flag = 2;
}
?>

<!DOCTYPE>
<html lang="ja">
<head>
<title>イベント詳細</title>
</head>
<body>
<h1>イベント詳細</h1>
<?php if( $page_flag === 1 ): ?>

<form method="post" action="">

  <table border="1" align="center" width="500px">

  <tr>
    <th>ID</th>
    <td>
      <p><?php echo $_POST['id']; ?></p>
    </td>
  </tr>

  <tr>
    <th>イベント名</th>
    <td>
      <p><?php echo $_POST['name']; ?></p>
    </td>
  </tr>

  <tr>
    <th>イメージ画像</th>
    <td>
      <p><//?php echo $_POST['image']; ?></p>
    </td>
  </tr>

  <tr>
    <th>開催日</th>
    <td>
      <p><?php echo $_POST['day']; ?></p>
    </td>
  </tr>

  <tr>
    <th>時間</th>
    <td>
      <p><?php echo $_POST['time']; ?></p>
    </td>
  </tr>

  <tr>
    <th>市区町村以下</th>
    <td>
      <p><?php echo $_POST['siku']; ?></p>
    </td>
  </tr>

  <tr>
    <th>内容</th>
    <td>
      <p align="left" valign="top"><?php echo $_POST['naiyo']; ?></p>
    </td>
  </tr>

  </table>

	<input type="submit" name="btn_back" style="position: absolute; left: 45%; top: 50%" value="戻る">
	<input type="submit" name="btn_submit" style="position: absolute; left: 55%; top: 50%" value="更新">

</form>

<?php elseif( $page_flag === 2 ): ?>

<p>更新が完了しました。</p>
<input type="button" onclick="location.href='Event_List.php'" align="center" value="イベントトップへ"/></button>


<?php else: ?>

<form method="post" action="">

<table border="1" align="center" width="500px">

  <tr>
    <th>ID</th>
    <td>
      <input type="text" name="id" value="1" readonly>
    </td>
  </tr>

  <tr>
    <th>イベント名</th>
    <td>
      <input type="text" name="name" value="" placeholder="名前">
    </td>
  </tr>

  <tr>
    <th>イメージ画像</th>
    <//td><//img src="hoge">
    <//input type="file" name="img_upload" accept="image/jpeg,image/png,image/gif">
     <//td>
  </tr>

  <tr>
    <th>開催日</th>
    <td>
      <textarea name="day" value="" placeholder="開催日"></textarea>
    </td>
  </tr>

  <tr>
    <th>時間</th>
    <td>
      <textarea name="time" value="" placeholder="時間"></textarea>
    </td>
  </tr>

  <tr>
    <th>市区町村以下</th>
    <td>
      <textarea name="siku" value="" placeholder="市区町村"></textarea>
    </td>
  </tr>

  <tr>
    <th>内容</th>
    <td>
      <textarea name="naiyo" value="" cols="40" rows="8" placeholder="内容"></textarea>
    </td>
  </tr>

</table>

	<input type="submit" name="btn_confirm" style="position: absolute; left: 50%; top: 70%" value="確認">
</form>

<?php endif; ?>
</body>
</html>