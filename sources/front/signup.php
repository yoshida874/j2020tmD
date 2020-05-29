<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div align="center">
        <table border="1">
            <tr>
                <th>
                    ユーザー名
                    <p>（ニックネーム可）</p>
                </th>
                <td>渡辺花子</td>
            </tr>
            <tr>
                <th>ID</th>
                <td>@watanabe_watanabe</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>watanabe@gmail.com</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                    <p>
                        <input type="radio" name="gender" value=0 checked="checked">男性
                        <input type="radio" name="gender" value=1>女性
                    </p>
                </td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td>1990/01/17</td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>****************</td>
            </tr>
            <tr>
                <th>
                    パスワード確認用
                    <p>※再度入力してください</p>
                </th>
                <td>****************</td>
            </tr>
            <tr>
                <th>
                    お子様の名前
                    <p>（ニックネーム可）</p>
                </th>
                <td>渡辺太郎
                </td>
            </tr>
            <tr>
                <th>お子様の誕生日</th>
                <td>2019/09/19</td>
            </tr>
            <th>お子様の性別</th>
            <td>
                <p>
                    <input type="radio" name="child_gender" value=0 checked="checked">男性
                    <input type="radio" name="child_gender" value=1>女性
                </p>
            </td>
        </table>

        <p>
            <input type="button" value="+お子様の追加" onclick="history.back()">
            <input type="button" value="登録" onclick="history.back()">
        </p>
    </div>
</body>

</html>