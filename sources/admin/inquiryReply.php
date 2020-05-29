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
<title>お問い合わせ詳細</title>
</head>
<body>
<h1>お問い合わせ詳細</h1>
<?php if( $page_flag === 1 ): ?>

<form method="post" action="">

  <textarea name="reply" cols="100" rows="20"></textarea>

	<input type="submit" name="btn_submit" value="返信">

</form>

<?php elseif( $page_flag === 2 ): ?>

<p>返信が完了しました。</p>

<?php else: ?>
<form method="post" action="">

<div align="center">
<table border="1">

  <tr>
    <th>ID</th>
    <td>
      <input type="text" name="yourId" value="1" readonly>
    </td>
  </tr>

  <tr>
    <th>状態</th>
    <td>
      <input type="text" name="status" value="未返信" readonly >
    </td>
  </tr>

  <tr>
    <th>ユーザー名</th>
    <td>
      <input type="text" name="userName" value="しんろう" readonly>
    </td>
  </tr>

  <tr>
    <th>お問い合わせ内容</th>
    <td>
      <input type="text" name="contentOfInquiry" value="ワケガワカラナイヨ" readonly>
    </td>
  </tr>

  <tr>
    <th>受信日時</th>
    <td>
      <input type="text" name="dateOfReceived" value="2020-09-18" readonly>
    </td>
  </tr>


</table>
</form>
<input type="submit" name="btn_confirm" value="返信">
</div>
<?php endif; ?>
</body>
</html>
