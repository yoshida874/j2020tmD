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
<title>団体詳細</title>
</head>
<body>
<h1>団体詳細</h1>
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
    <th>団体名</th>
    <td>
      <p><?php echo $_POST['dantai']; ?></p>
    </td>
  </tr>

  <tr>
    <th>代表者</th>
    <td>
      <p><?php echo $_POST['daihyo']; ?></p>
    </td>
  </tr>

  <tr>
    <th>代表者連絡先</th>
    <td>
      <p><?php echo $_POST['renraku']; ?></p>
    </td>
  </tr>

  <tr>
    <th>市町村</th>
    <td>
      <p><?php echo $_POST['sityoson']; ?></p>
    </td>
  </tr>

  <tr>
    <th>事務所の所在地</th>
    <td>
      <p><?php echo $_POST['shozai']; ?></p>
    </td>
  </tr>

  <tr>
    <th>目的</th>
    <td>
      <p align="left" valign="top"><?php echo $_POST['mokuteki']; ?></p>
    </td>
  </tr>

  </table>

	<input type="submit" name="btn_back" style="position: absolute; left: 45%; top: 50%" value="戻る">
	<input type="submit" name="btn_submit" style="position: absolute; left: 55%; top: 50%" value="更新">

</form>

<?php elseif( $page_flag === 2 ): ?>

<p>更新が完了しました。</p>
<input type="button" onclick="location.href='Dantai_List.php'" align="center" value="団体トップへ"/></button>


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
    <th>団体名</th>
    <td>
      <input type="text" name="dantai" value="" placeholder="団体名">
    </td>
  </tr>

  <tr>
    <th>代表者</th>
    <td>
      <input type="text" name="daihyo" value="" placeholder="名前">
    </td>
  </tr>

  <tr>
    <th>代表者連絡先</th>
    <td>
      <input type="text" name="renraku" value="" placeholder="連絡先">
    </td>
  </tr>

  <tr>
    <th>市町村</th>
    <td>
      <textarea name="sityoson" value="" placeholder="市町村"></textarea>
    </td>
  </tr>

  <tr>
    <th>事務所の所在地</th>
    <td>
      <input type="text" name="shozai" value="" placeholder="所在地">
    </td>
  </tr>

  <tr>
    <th>目的</th>
    <td>
      <textarea name="mokuteki" value="" cols="40" rows="8" placeholder="目的"></textarea>
    </td>
  </tr>

</table>

	<input type="submit" name="btn_confirm" style="position: absolute; left: 50%; top: 70%" value="確認">
</form>

<?php endif; ?>
</body>
</html>