<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

$id = 0;
$err_array = array();
$err_flag = 0;

$page = 0;
if (
    isset($_GET['page'])
    && cutil::is_number($_GET['page'])
    && $_GET['page'] > 0
) {
    $page = $_GET['page'];
}

if (
    isset($_GET['mid'])
    //cutilクラスのメンバ関数をスタティック呼出
    && cutil::is_number($_GET['mid'])
    && $_GET['mid'] > 0
) {
    $id = $_GET['mid'];
}
//$_POST優先
if (
    isset($_POST['id'])
    //cutilクラスのメンバ関数をスタティック呼出
    && cutil::is_number($_POST['id'])
    && $_POST['id'] > 0
) {
    $id = $_POST['id'];
}
//メンバークラスを構築
$user_obj = new cnpo_user();
//配列にメンバーを$_POSTに取り出す
//すでにPOSTされていたら、DBからは取り出さない

if (isset($_POST['func'])) {
    switch ($_POST['func']) {
        case 'set':
            if (!paramchk()) {
                $_POST['func'] = 'edit';
                $err_flag = 1;
            } else {
                regist();
                //regist()内でリダイレクトするので
                //ここまで実行されればリダイレクト失敗
                $_POST['func'] = 'edit';
                //システムに問題のあるエラー
                $err_flag = 2;
            }
        case 'conf':
            if (!paramchk()) {
                $_POST['func'] = 'edit';
                $err_flag = 1;
            }
            break;
        case 'edit':
            //戻るボタン。
            break;
        default:
            //通常はありえない
            echo '原因不明のエラーです。';
            exit;
            break;
    }
} else {
    if ($id > 0) {
        if (($_POST = $user_obj->get_tgt(false, $id)) === false) {
            $_POST['func'] = 'new';
        } else {
            //$_POST['fruits'] = $member_obj->get_all_fruits_match(false, $member_id);
            //$_POST['func'] = 'edit';
        }
    } else {
        //新規の入力フォーム
        $_POST['func'] = 'new';
    }
}

/////////////////////////////////////////////////////////////////
/// 関数ブロック
/////////////////////////////////////////////////////////////////


//--------------------------------------------------------------------------------------
/*!
@brief	エラー存在のアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_err_flag()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $err_flag;
    $str = '';
    switch ($err_flag) {
        case 1:
            $str = <<<END_BLOCK
<p class="red">入力エラーがあります。各項目のエラーを確認してください。</p>
END_BLOCK;
            break;
        case 2:
            $str = <<<END_BLOCK
<p class="red">更新に失敗しました。サポートを確認下さい。</p>
END_BLOCK;
            break;
    }
    $smarty->assign('err_flag', $str);
}

//--------------------------------------------------------------------------------------
/*!
@brief	パラメータのチェック
@return	エラーの場合はfalseを返す
*/
//--------------------------------------------------------------------------------------
function paramchk()
{
    global $err_array;
    $retflg = true;
    /// ユーザ名の存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'user_name', 'ユーザ名', 'isset_nl')) {
        $retflg = false;
    }
    /// ユーザ名の存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'user_id', 'ユーザID', 'isset_nl')) {
        $retflg = false;
    }
    /// NPO_IDチェック
    if (ccontentsutil::chkset_err_field($err_array, 'NPO_id', 'NPO_ID', 'isset_num_range', 1, 1000)) {
        $retflg = false;
    }
    /// パスワードの存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'pw', 'パスワード', 'isset_nl')) {
        $retflg = false;
    }
    /// パスワードの存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'address', 'メールアドレス', 'isset_nl')) {
        $retflg = false;
    }
    /// メンバーの都道府県チェック
    if (ccontentsutil::chkset_err_field($err_array, 'authority', '権限', 'isset_num_range', 0, 5)) {
        $retflg = false;
    }

    return $retflg;
}

//--------------------------------------------------------------------------------------
/*!
@brief	userの追加／更新
@return	なし
*/
//--------------------------------------------------------------------------------------
function regist_user()
{
    $chenge = new cchange_ex();
    foreach ($_POST['user'] as $key => $val) {
        $dataarr = array();
        $dataarr['id'] = (int) $val;
        $chenge->insert('NPO_user', $dataarr);
    }
}


//--------------------------------------------------------------------------------------
/*!
@brief	メンバーデータの追加／更新。保存後自分自身を再読み込みする。
@return	なし
*/
//--------------------------------------------------------------------------------------
function regist()
{
    $dataarr = array();
    $dataarr['user_name'] = (string) $_POST['user_name'];
    $dataarr['user_id'] = (string) $_POST['user_id'];
    $dataarr['NPO_id'] = (int) $_POST['NPO_id'];
    $dataarr['pw'] = (string) $_POST['pw'];
    $dataarr['address'] = (string) $_POST['address'];
    $detaarr['authority'] = (int) $_POST['authority'];
    $chenge = new cchange_ex();

    // 値追加
    $mid = $chenge->insert('NPO_user', $dataarr);
    // regist_user($mid);
    cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $mid);
}
//--------------------------------------------------------------------------------------
/*!
@brief	メンバーIDのアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_user_id()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $id;
    $smarty->assign('id', $id);
}

//--------------------------------------------------------------------------------------
/*!
@brief	メンバーIDのアサイン(新規の場合は「新規」)
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_user_id_txt()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $id;
    if ($id <= 0) {
        $smarty->assign('user_id_txt', '新規');
    } else {
        $smarty->assign('user_id_txt', $id);
    }
}


/////////////////////////////////////////////////////////////////
/// 関数呼び出しブロック
/////////////////////////////////////////////////////////////////
if (!isset($_POST['user_name'])) $_POST['user_name'] = '';
if (!isset($_POST['user_id'])) $_POST['user_id'] = '';
if (!isset($_POST['NPO_id'])) $_POST['NPO_id'] = 0;
if (!isset($_POST['pw'])) $_POST['pw'] = '';
if (!isset($_POST['address'])) $_POST['address'] = '';
if (!isset($_POST['authority'])) $_POST['authority'] = 0;
assign_err_flag();
assign_user_id();
assign_user_id_txt();
$smarty->assign('err_array', $err_array);

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'npo/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');
