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

<p>削除が完了しました。</p>
<input type="button" onclick="location.href='Dantai_List.php'" align="center" value="団体リストへ"/></button>


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
      <input type="text" name="dantai" value="" placeholder="名前" readonly>
    </td>
  </tr>

  <tr>
    <th>代表者</th>
    <td>
      <input type="text" name="daihyo" value="" placeholder="代表者" readonly>
    </td>
  </tr>

  <tr>
    <th>代表者連絡先</th>
    <td>
      <input type="text" name="renraku" value="" placeholder="連絡先" readonly>
    </td>
  </tr>

  <tr>
    <th>市町村</th>
    <td>
      <input type="text" name="sityoson" value="" placeholder="市町村" readonly>
    </td>
  </tr>

  <tr>
    <th>事務所の所在地</th>
    <td>
      <input type="text" name="shozaiti" value="" placeholder="所在地" readonly>
    </td>
  </tr>

  <tr>
    <th>目的</th>
    <td>
      <textarea name="blacklist" value="" cols="40" rows="8" placeholder="目的" readonly></textarea>
    </td>
  </tr>

</table>

	<input type="submit" name="btn_confirm" style="position: absolute; left: 50%; top: 70%" value="削除" readonly>
</form>

<?php endif; ?>
</body>
</html>