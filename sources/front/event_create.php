<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
      <!-- wrapper にしてcssで分割したほうが良さそう-->
      <div>
        <div>
            <table>
                <tr>
                <td>タイトル</td>
                <td><input type="text" name="title" value="" size="24" /></td>
                </tr>

                <tr>
                <td>開催団体</td>
                <td>
                    <input
                    type="text"
                    name="organizing_organization"
                    value=""
                    size="24"
                    />
                </td>
                </tr>

                <tr>
                <td>イベント画像</td>
                <td><img class="fit-picture" src="img path" alt="Event imgge" /></td>
                </tr>

                <tr>
                <td>対象年齢</td>
                <td>
                    <input type="text" name="title" value="" size="24" style="width: 50px;"/>
                    ~
                    <input type="text" name="title" value="" size="24" style="width: 50px;"/>
                </td>
                </tr>

                <tr>
                <table border="1">
                    <tr>
                    <td>主催者</td>
                    <td><input type="text" name="title" value="" size="24" /></td>
                    </tr>
                    <tr>
                    <td>ハッシュタグ</td>
                    <td>aaa, bbb, ccc, ddd</td>
                    </tr>
                    <tr>
                    <td>参加費用</td>
                    <td>500円</td>
                    </tr>
                </table>
                </tr>

                <tr>
                <td>イベント説明文</td>
                </tr>
            </table>
            </div>
            <textarea name="" id="" cols="40" rows="10">
                このいべんとは〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜
            </textarea>

            <!-- column divで分割させたほうが後々楽そう？-->
            <div style="border: 2px solid #000000; width: 300px; height: 220px;">
                <div>
                    <table>
                    <!-- 開催日程-->
                    <tr>
                        開催日程・募集期間
                    </tr>
                    <tr>
                        <td>開始日時</td>
                        <td>
                        <table>
                            <tr>
                            <td>日</td>
                            <td><input type="text" name="title" value="" size="24" /></td>
                            </tr>
                            <tr>
                            <td>時間</td>
                            <td><input type="text" name="title" value="" size="24" /></td>
                            </tr>
                        </table>
                        </td>
                    </tr>

                    <!-- 終了日時-->
                    <tr>
                        <td>終了日時</td>
                        <td>
                        <table>
                            <tr>
                            <td>日</td>
                            <td><input type="text" name="title" value="" size="24" /></td>
                            </tr>
                            <tr>
                            <td>時間</td>
                            <td><input type="text" name="title" value="" size="24" /></td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    <!-- 募集開始〜終了-->
                    <tr>
                        <td>
                        募集開始
                        <p>〜終了日</p>
                        </td>
                        <td>
                        <table>
                            <tr>
                            <td>日</td>
                            <td><input type="text" name="title" value="" size="24" /></td>
                            </tr>
                            <tr>
                            <td>時間</td>
                            <td><input type="text" name="title" value="" size="24" /></td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </div>

                <div style="border: 2px solid #000000; width: 300px; height: 100px;">
                    <tr>
                    開催場所
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <td>会場名</td>
                                <td><td><input type="text" name="title" value="" size="24" /></td></td>
                            </tr>
                            <tr>
                                <td>場所</td>
                                <td><td><input type="text" name="title" value="" size="24" /></td></td>
                            </tr>
                        </table>
                    </tr>
                </div>

                <table>
                    <tr>
                        <td><button>作成</button></td>
                        <td><button>保存</button></td>
                        <td><button>削除</button></td>
                    </tr>
                </table>
            </div>
        </div>
  </body>
</html>
