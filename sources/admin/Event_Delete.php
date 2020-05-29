<?php

// 変数の初期化
$page_flag = 0;

if( !empty($_POST['btn_confirm']) ) {

	$page_flag = 1;

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

<p>削除が完了しました。</p>
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
      <input type="text" name="name" value="" placeholder="名前" readonly>
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
      <textarea name="day" value="" placeholder="開催日" readonly></textarea>
    </td>
  </tr>

  <tr>
    <th>時間</th>
    <td>
      <textarea name="time" value="" placeholder="時間"readonly ></textarea>
    </td>
  </tr>

  <tr>
    <th>市区町村以下</th>
    <td>
      <textarea name="siku" value="" placeholder="市区町村" readonly ></textarea>
    </td>
  </tr>

  <tr>
    <th>内容</th>
    <td>
      <textarea name="naiyo" value="" cols="40" rows="8" placeholder="内容" readonly></textarea>
    </td>
  </tr>

</table>

	<input type="submit" name="btn_confirm" style="position: absolute; left: 50%; top: 70%" value="削除" readonly>
</form>

<?php endif; ?>
</body>
</html>