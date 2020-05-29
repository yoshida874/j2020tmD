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
<title>ユーザー詳細</title>
</head>
<body>
<h1>ユーザー詳細</h1>
<?php if( $page_flag === 1 ): ?>

<form method="post" action="">

  <table border="1">

  <tr>
    <th>ID</th>
    <td>
      <p><?php echo $_POST['yourId']; ?></p>
    </td>
  </tr>

  <tr>
    <th>ユーザーID</th>
    <td>
      <p><?php echo $_POST['userId']; ?></p>
    </td>
  </tr>

  <tr>
    <th>ユーザー名</th>
    <td>
      <p><?php echo $_POST['userName']; ?></p>
    </td>
  </tr>

  <tr>
    <th>PW</th>
    <td>
      <p><?php echo $_POST['yourPassword']; ?></p>
    </td>
  </tr>

  <tr>
    <th>PWの再確認</th>
    <td>
      <p><?php echo $_POST['confirmPassword']; ?></p>
    </td>
  </tr>

  <tr>
    <th>生年月日</th>
    <td>
      <p><?php echo $_POST['userBirth']; ?></p>
    </td>
  </tr>

  <tr>
    <th>趣味</th>
    <td>
      <p><?php echo $_POST['userInterest']; ?></p>
    </td>
  </tr>

  <tr>
    <th>メールアドレス</th>
    <td>
      <p><?php echo $_POST['yourMailaddress']; ?></p>
    </td>
  </tr>

  </table>

	<input type="submit" name="btn_back" value="戻る">
	<input type="submit" name="btn_submit" value="更新">

</form>

<?php elseif( $page_flag === 2 ): ?>

<p>更新が完了しました。</p>

<?php else: ?>

<form method="post" action="">

<table border="1">

  <tr>
    <th>ID</th>
    <td>
      <input type="text" name="yourId" value="1" readonly>
    </td>
  </tr>

  <tr>
    <th>ユーザーID</th>
    <td>
      <input type="text" name="userId" value="" placeholder="ID">
    </td>
  </tr>

  <tr>
    <th>ユーザー名</th>
    <td>
      <input type="text" name="userName" value="" placeholder="名前">
    </td>
  </tr>

  <tr>
    <th>PW</th>
    <td>
      <input type="text" name="yourPassword" value="" placeholder="PW">
    </td>
  </tr>

  <tr>
    <th>PWの再確認</th>
    <td>
      <input type="text" name="confirmPassword" value="" placeholder="PW">
    </td>
  </tr>

  <tr>
    <th>生年月日</th>
    <td>
      <input type="text" name="userBirth" value="" placeholder="20205022">
    </td>
  </tr>

  <tr>
    <th>趣味</th>
    <td>
      <input type="text" name="userInterest" value="" placeholder="趣味">
    </td>
  </tr>

  <tr>
    <th>メールアドレス</th>
    <td>
      <input type="text" name="yourMailaddress" value="" placeholder="Mailaddress">
    </td>
  </tr>

</table>

	<input type="submit" name="btn_confirm" value="確認">
</form>

<?php endif; ?>
</body>
</html>
