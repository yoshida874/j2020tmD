<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div align="center">
      <table border="1">
        <tr>
          <td>イベント名</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
          <td>主催者</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
        </tr>
        <tr>
          <td>対象年齢</td>
          <td>
            <input
              type="text"
              name="title"
              value=""
              size="24"
              style="width: 50px;"
            />
            ~
            <input
              type="text"
              name="title"
              value=""
              size="24"
              style="width: 50px;"
            />
            歳
          </td>
          <td>ハッシュタグ</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
        </tr>
        <tr>
          <td>開催日</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
          <td>時間</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
        </tr>
        <tr>
          <td>募集期間</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
          <td>開催場所</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
        </tr>
        <tr>
          <td>会場名</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
          <td>内容</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
        </tr>
        <tr>
          <td>参加費</td>
          <td><input type="text" name="userId" value="" size="24" /></td>
        </tr>
      </table>
      <section id="confirm">
        <form>
          <div align="center">
            <button onmousedown="confirm()">確認</button>
          </div>
        </form>
        <script>
          function confirm() {
            document.getElementById("confirm").hidden = true;
            document.getElementById("post").hidden = false;
          }
        </script>
      </section>
      <section id="post" hidden>
        <div align="center">
          <button onmousedown="back()">戻る</button>
          <button>追加</button>
        </div>
        <script>
          function back() {
            document.getElementById("confirm").hidden = false;
            document.getElementById("post").hidden = true;
          }
        </script>
      </section>
    </div>
  </body>
</html>
