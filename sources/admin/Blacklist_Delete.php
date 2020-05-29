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

<p>削除が完了しました。</p>
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
      <input type="text" name="name" value="" placeholder="名前" readonly>
    </td>
  </tr>

  <tr>
    <th>危険度</th>
    <td>
      <input type="text" name="kiken" value="" placeholder="危険度" readonly>
    </td>
  </tr>

  <tr>
    <th>ブラックリスト入りの理由</th>
    <td>
      <textarea name="blacklist" value="" cols="40" rows="8" placeholder="理由" readonly></textarea>
    </td>
  </tr>

</table>

	<input type="submit" name="btn_confirm" style="position: absolute; left: 50%; top: 50%" value="削除" readonly>
</form>

<?php endif; ?>
</body>
</html>