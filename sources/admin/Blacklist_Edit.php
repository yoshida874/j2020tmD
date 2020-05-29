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
<title>ブラックリスト</title>
</head>
<body>
<h1>ブラックリスト</h1>
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
    <th>ユーザー名</th>
    <td>
      <p><?php echo $_POST['name']; ?></p>
    </td>
  </tr>

  <tr>
    <th>危険度</th>
    <td>
      <p><?php echo $_POST['kiken']; ?></p>
    </td>
  </tr>

  <tr>
    <th>ブラックリスト入りの理由</th>
    <td>
      <p align="left" valign="top"><?php echo $_POST['blacklist']; ?></p>
    </td>
  </tr>

  </table>

	<input type="submit" name="btn_back" style="position: absolute; left: 45%; top: 50%" value="戻る">
	<input type="submit" name="btn_submit" style="position: absolute; left: 55%; top: 50%" value="更新">

</form>

<?php elseif( $page_flag === 2 ): ?>

<p>更新が完了しました。</p>
<input type="button" onclick="location.href='Blacklist_List.php'" align="center" value="ブラックリストへ"/></button>


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
    <th>ユーザー名</th>
    <td>
      <input type="text" name="name" value="" placeholder="名前">
    </td>
  </tr>

  <tr>
    <th>危険度</th>
    <td>
      <input type="text" name="kiken" value="" placeholder="危険度">
    </td>
  </tr>

  <tr>
    <th>ブラックリスト入りの理由</th>
    <td>
      <textarea name="blacklist" value="" cols="40" rows="8" placeholder="理由"></textarea>
    </td>
  </tr>

</table>

	<input type="submit" name="btn_confirm" style="position: absolute; left: 50%; top: 50%" value="確認">
</form>

<?php endif; ?>
</body>
</html>
