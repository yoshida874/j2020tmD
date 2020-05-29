<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div align="center">
    <section id="detail">
      <h2>お問い合わせ詳細</h2>
      <table border="1">
        <tr>
          <td>ID</td>
          <td>1</td>
        </tr>
        <tr>
          <td>状態</td>
          <td>未返信</td>
        </tr>
        <tr>
          <td>ユーザ名</td>
          <td>アザラシ大好き</td>
        </tr>
        <tr>
          <td>ユーザID</td>
          <td>Azarashi_suko</td>
        </tr>
        <tr>
          <td>お問い合わせ内容</td>
          <td>お弁当は持参したほうがいいですか？</td>
        </tr>
        <tr>
          <td>受信日時</td>
          <td>2020-01-14</td>
        </tr>
      </table>
      <button onmousedown="Reply()">返信</button>
      <script>
        function Reply() {
          document.getElementById("detail").hidden = true;
          document.getElementById("reply").hidden = false;
        }
      </script>
    </section>
    <section id="reply" hidden>
      <h2>返信内容</h2>
      <p>
        <textarea name="" id="" cols="40" rows="10"> </textarea>
      </p>
      <button>送信</button>
    </section>
  </div>
</body>

</html>